<?php

namespace App\Livewire\Admin\Dashboard;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class BioCard extends Component
{
    public function render()
    {
        $biography = Auth::user();

        return view('livewire.admin.dashboard.bio-card', compact('biography'));
    }
}
