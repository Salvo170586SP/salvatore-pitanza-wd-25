<?php

namespace App\Livewire\Admin\Trainings;

use App\Models\Admin\Training;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class DeleteTrainings extends ModalComponent
{
    public $trainingId;

    public function mount($trainingId)
    {
        $this->trainingId = $trainingId;
    }

    public function deleteTraining()
    {
        $training = Training::find($this->trainingId);

        if ($training) {
            $training->delete();
        }
        
        $this->dispatch('closeModal');
        session()->flash('message', 'Training deleted successfully!');
        $this->redirect('/admin/trainings', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.trainings.delete-trainings');
    }
}
