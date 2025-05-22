<?php

namespace App\Livewire;

use App\Models\Admin\Project;
use Livewire\Component;

class AllProjects extends Component
{
    public function render()
    {
        $projects = Project::all();
        return view('livewire.all-projects', compact('projects'))->layout('layouts.app');
    }
}
