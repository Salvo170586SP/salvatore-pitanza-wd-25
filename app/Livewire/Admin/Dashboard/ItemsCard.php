<?php

namespace App\Livewire\Admin\Dashboard;

use App\Models\Admin\Document;
use App\Models\Admin\Drawing;
use App\Models\Admin\Experience;
use App\Models\Admin\Project;
use App\Models\Admin\Training;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ItemsCard extends Component
{
    public function render()
    {
        $projects = Project::where('admin_id', Auth::id())->get();
        $drawings = Drawing::where('admin_id', Auth::id())->get();
        $trainings = Training::where('admin_id', Auth::id())->get();
        $experiences = Experience::where('admin_id', Auth::id())->get();
        $documents = Document::where('admin_id', Auth::id())->get();

        return view('livewire.admin.dashboard.items-card', compact(
            'projects',
            'drawings',
            'trainings',
            'experiences',
            'documents'
        ));
    }
}
