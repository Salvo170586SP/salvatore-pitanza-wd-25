<?php

namespace App\Livewire\ComponentsWelcome;

use App\Models\Admin\Training;
use Livewire\Component;

class Trainings extends Component
{
    public function render()
    {
        $trainings = Training::all();
        return view('livewire.components-welcome.trainings', compact('trainings'));
    }
}
