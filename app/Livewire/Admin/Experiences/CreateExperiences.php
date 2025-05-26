<?php

namespace App\Livewire\Admin\Experiences;

use App\Models\Admin\Experience;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateExperiences extends Component
{
    public $title;
    public $subtitle;
    public $description;

    protected $rules = [
        'title' => 'required|string|max:255',
        'subtitle' => 'nullable',
        'description' => 'string|max:1000',
    ];

    public function resetForm()
    {
        $this->reset(['title', 'description', 'subtitle',]);
        $this->dispatch('form-reset');
    }

    public function createExperience()
    {
        $this->validate();

        Experience::create([
            'admin_id' => Auth::id(),
            'title' => $this->title,
            'subtitle' => trim($this->subtitle) ?: null,
            'description' => trim($this->description) ?: null,
        ]);

        session()->flash('message', 'Experience created successfully!');

        $this->reset();

        $this->redirect('/admin/experiences', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.experiences.create-experiences');
    }
}
