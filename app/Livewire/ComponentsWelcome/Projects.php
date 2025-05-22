<?php

namespace App\Livewire\ComponentsWelcome;

use App\Models\Admin\Project;
use Livewire\Component;

class Projects extends Component
{
    public function render()
    {
        $projects = Project::all();
        return view('livewire.components-welcome.projects', compact('projects'));
    }
}
