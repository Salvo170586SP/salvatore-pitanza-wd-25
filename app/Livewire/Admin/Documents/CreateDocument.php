<?php

namespace App\Livewire\Admin\Documents;

use App\Models\Admin\Document;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateDocument extends Component
{
    use WithFileUploads;

    public $title;
    public $title_ita;
    public $description;
    public $description_ita;
    public $img_url;
    public $img_name;

    protected $rules = [
        'title' => 'required',
        'title_ita' => 'required',
        'description' => 'max:255',
        'description_ita' => 'max:255',
        'img_url' => 'required',
    ];

    public function resetForm()
    {
        $this->reset();
        $this->dispatch('form-reset');
    }

    public function isPdf()
    {
        // Controlliamo se il file ha estensione .pdf
        if (!$this->img_url) {
            return false;
        }

        $extension = pathinfo($this->img_url, PATHINFO_EXTENSION);
        return strtolower($extension) === 'pdf';
    }

    public function createDocument()
    {
        $this->validate();

        try {
            $url = null;
            $name_img = null;
            if ($this->img_url) {
                $url = $this->img_url->store('documents', 'public');
                $name_img = $this->img_url->getClientOriginalName();
            }

            Document::create([
                'admin_id' => Auth::id(),
                'title' => trim($this->title) ?: null,
                'title_ita' => trim($this->title_ita) ?: null,
                'img_url' => $url,
                'img_name' => $name_img,
                'description' => trim($this->description) ?: null,
                'description_ita' => trim($this->description_ita) ?: null,
            ]);

            session()->flash('message', 'Document created successfully.');

            $this->reset();

            return $this->redirect('/dashboard/documents', navigate: true);
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
            return $this->redirect('/dashboard/documents', navigate: true);
        }
    }

    public function render()
    {
        return view('livewire.admin.documents.create-document');
    }
}
