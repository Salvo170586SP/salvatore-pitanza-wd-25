<?php

namespace App\Livewire\ComponentsWelcome;

use App\Models\Admin\Experience;
use Livewire\Component;

class Experiences extends Component
{
    public function render()
    {
        $experiences = Experience::all();

        return view('livewire.components-welcome.experiences', compact('experiences'));
    }
}
