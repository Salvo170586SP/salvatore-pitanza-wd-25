<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Admin\Project;
use Livewire\Component;
use Livewire\WithPagination;

class IndexProjects extends Component
{
    use WithPagination;
    public $search = '';

    public function render()
    {
        $projects = Project::query();

        if ($this->search) {
            $projects = $projects->where('title', 'like', '%' . $this->search . '%');
        }

        $projects = $projects->paginate(5);

        return view('livewire.admin.projects.index-projects', compact('projects'));
    }
}
