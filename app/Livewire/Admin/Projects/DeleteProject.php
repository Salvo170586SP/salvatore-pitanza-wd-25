<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Admin\Project;
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
        try {

            $project = Project::findOrFail($this->projectId);

            if ($project) {
                Storage::disk('public')->delete($project->img_url);
                $project->delete();
            }

            $this->dispatch('closeModal');
            session()->flash('message', 'Project deleted successfully!');
            $this->redirect('/admin/projects', navigate: true);

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
