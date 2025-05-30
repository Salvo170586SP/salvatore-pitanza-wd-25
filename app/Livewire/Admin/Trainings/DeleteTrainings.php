<?php

namespace App\Livewire\Admin\Trainings;

use App\Models\Admin\Training;
use Illuminate\Support\Facades\Auth;
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
        // Verifica nuovamente l'autorizzazione
        if (!Auth::check() || $training->admin_id !== Auth::id()) {
           abort(403, 'You are not authorized');
        }

        try {
            if ($training) {
                $training->delete();
            }

            $this->dispatch('closeModal');
            session()->flash('message', 'Training deleted successfully!');
            $this->redirect('/dashboard/trainings', navigate: true);
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
            return $this->redirect('/dashboard/trainings', navigate: true);
        }
    }

    public function render()
    {
        return view('livewire.admin.trainings.delete-trainings');
    }
}
