<?php

namespace App\Livewire\Admin\Experiences;

use App\Models\Admin\Experience;
use Illuminate\Support\Facades\Auth;
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

        // Verifica nuovamente l'autorizzazione
        if (!Auth::check() || $experience->admin_id !== Auth::id()) {
            abort(403, 'You are not authorized');
        }

        try {
            if ($experience) {
                $experience->delete();
            }

            $this->dispatch('closeModal');
            session()->flash('message', 'Experience deleted successfully!');
            $this->redirect('/dashboard/experiences', navigate: true);
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
            return $this->redirect('/dashboard/experiences', navigate: true);
        }
    }

    public function render()
    {
        return view('livewire.admin.experiences.delete-experience');
    }
}
