<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Admin\Project;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowProject extends Component
{
    public $project;
    public $showImagePreview = false;

    public function mount(Project $project)
    {
        $this->project = $project;
    }

    public function render()
    {
        return view('livewire.admin.projects.show-project');
    }
}
