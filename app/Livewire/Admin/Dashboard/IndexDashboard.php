<?php

namespace App\Livewire\Admin\Dashboard;

use App\Models\Admin\Document;
use App\Models\Admin\Drawing;
use App\Models\Admin\Experience;
use App\Models\Admin\Project;
use App\Models\Admin\Training;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class IndexDashboard extends Component
{
    public function render()
    {
        $projects = Project::where('admin_id', Auth::id())->count();
        $drawings = Drawing::where('admin_id', Auth::id())->count();
        $trainings = Training::where('admin_id', Auth::id())->count();
        $experiences = Experience::where('admin_id', Auth::id())->count();
        $documents = Document::where('admin_id', Auth::id())->count();

        return view('livewire.admin.dashboard.index-dashboard', compact(
            'projects',
            'drawings',
            'trainings',
            'experiences',
            'documents'
        ));
    }
}
