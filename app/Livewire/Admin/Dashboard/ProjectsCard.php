<?php

namespace App\Livewire\Admin\Dashboard;

use App\Models\Admin\Project;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProjectsCard extends Component
{
    public function render()
    {
        $projects = Project::where('admin_id', Auth::id())->get();

        return view('livewire.admin.dashboard.projects-card', compact('projects'));
    }
}
