<?php

namespace App\Livewire\Admin\Experiences;

use App\Models\Admin\Experience;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class DeleteExperience extends ModalComponent
{
    public $experienceId;

    public function mount($experienceId)
    {
        $this->experienceId = $experienceId;
    }

    public function deleteExperience()
    {
        $experience = Experience::find($this->experienceId);

        if ($experience) {
            $experience->delete();
        }

        $this->dispatch('closeModal');
        session()->flash('message', 'Experience deleted successfully!');
        $this->redirect('/admin/experiences', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.experiences.delete-experience');
    }
}
