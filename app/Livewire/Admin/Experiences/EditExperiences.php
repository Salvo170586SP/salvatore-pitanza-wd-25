<?php

namespace App\Livewire\Admin\Experiences;

use App\Models\Admin\Experience;
use Livewire\Component;

class EditExperiences extends Component
{
    public $experience;
    public $title;
    public $subtitle;
    public $description;

    protected $rules = [
        'title' => 'required|string|max:255',
        'subtitle' => 'nullable',
        'description' => 'string|max:1000',
    ];

    public function mount(Experience $experience)
    {
        $this->experience = $experience;
        $this->title = $experience->title;
        $this->subtitle = $experience->subtitle;
        $this->description = $experience->description;
    }

    public function resetForm()
    {
        $this->reset(['title', 'description', 'subtitle',]);
        $this->dispatch('form-reset');
    }

    public function editExperience()
    {
        try {
            $this->validate();

            $this->experience->update([
                'title' => $this->title,
                'subtitle' => trim($this->subtitle) ?: null,
                'description' => trim($this->description) ?: null,
            ]);

            session()->flash('message', 'Experience updated successfully!');

            $this->redirect('/admin/experiences', navigate: true);
        } catch (\Illuminate\Validation\ValidationException $e) {
            $this->dispatch('validation-error', $e->validator->errors()->first());
            return;
        }
    }

    public function render()
    {
        return view('livewire.admin.experiences.edit-experiences');
    }
}
