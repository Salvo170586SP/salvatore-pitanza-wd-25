<?php

namespace App\Livewire\Admin\Drawings;

use App\Models\Admin\Drawing;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateDrawings extends Component
{
    use WithFileUploads;

    public $img_url;
    public $url_web;
    public $img_name;

    protected $rules = [
        'img_url' => 'required',
        'url_web' => 'nullable|url',
    ];

    public function resetForm()
    {
        $this->reset(['img_url', 'url_web', 'img_name']);
        $this->dispatch('form-reset');
    }

    public function createDrawing()
    {
        $this->validate();

        try {
            $url = null;
            if ($this->img_url) {
                $url = $this->img_url->store('drawings', 'public');
                $name_img = $this->img_url->getClientOriginalName();
            }

            Drawing::create([
                'admin_id' => Auth::id(),
                'img_url' => $url,
                'img_name' => $name_img,
                'url_web' => trim($this->url_web) ?: null,
            ]);

            session()->flash('message', 'Drawing created successfully.');

            $this->reset();

            return $this->redirect('/admin/drawings', navigate: true);
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
            return $this->redirect('/admin/drawings', navigate: true);
        }
    }

    public function render()
    {
        return view('livewire.admin.drawings.create-drawings');
    }
}
