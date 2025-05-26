<?php

namespace App\Livewire\Admin\Drawings;

use App\Models\Admin\Drawing;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditDrawings extends Component
{
    use WithFileUploads;

    public $drawing;
    public $img_url;
    public $url_web;
    public $img_name;

    protected $rules = [
        'img_url' => 'required',
        'url_web' => 'nullable|url',
    ];

    public function mount(Drawing $drawing)
    {
        $this->drawing = $drawing;
        $this->url_web = $drawing->url_web;
        $this->img_name = $drawing->img_name;

        if ($drawing->img_url) {
            $this->img_url = asset('storage/' . $drawing->img_url);
        }
    }

    public function resetForm()
    {
        $this->reset(['img_url', 'url_web', 'img_name']);
        $this->dispatch('form-reset');
    }

    public function editDrawing()
    {
        $this->validate();

        // Gestione dell'immagine
        $url = $this->drawing->img_url;  // Mantiene l'URL esistente come default
        $name_img = $this->drawing->img_name;  // Mantiene il nome esistente come default

        // Se è stata caricata una nuova immagine
        if ($this->img_url && !is_string($this->img_url)) {
            // Se esiste già un'immagine, la eliminiamo
            if ($this->drawing->img_url) {
                Storage::disk('public')->delete($this->drawing->img_url);
            }

            // Salva la nuova immagine
            $name_img = $this->img_url->getClientOriginalName();
            $url = $this->img_url->store('drawings', 'public');
        }

        $this->drawing->update([
            'img_url' => $url,
            'img_name' => $name_img,
            'url_web' => trim($this->url_web) ?: null,
        ]);

        session()->flash('message', 'Drawing updated successfully.');

        return $this->redirect('/admin/drawings', navigate: true);
    }
    
    public function render()
    {
        return view('livewire.admin.drawings.edit-drawings');
    }
}
