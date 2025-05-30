<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Admin\Project;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use LivewireUI\Modal\ModalComponent;

class DeleteProject extends ModalComponent
{
    public $projectId;

    public function mount($projectId)
    {
        $this->projectId = $projectId;
    }

    public function deleteProject()
    {
        $project = Project::findOrFail($this->projectId);
        
        // Verifica nuovamente l'autorizzazione
        if (!Auth::check() || $project->admin_id !== Auth::id()) {
            abort(403, 'You are not authorized');
        }

        try {
            if ($project) {
                Storage::disk('public')->delete($project->img_url);
                $project->delete();
            }

            $this->dispatch('closeModal');
            session()->flash('message', 'Project deleted successfully!');
            $this->redirect('/dashboard/projects', navigate: true);
        } catch (\Illuminate\Validation\ValidationException $e) {
            $this->dispatch('validation-error', $e->validator->errors()->first());
            return;
        }
    }

    public function render()
    {
        return view('livewire.admin.projects.delete-project');
    }
}
