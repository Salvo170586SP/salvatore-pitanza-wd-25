<?php

namespace App\Livewire\Admin\Trainings;

use App\Models\Admin\Training;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowTrainings extends Component
{
    public $training;

    public function mount(Training $training)
    {
        $this->training = $training;
    }

    public function render()
    {
        return view('livewire.admin.trainings.show-trainings');
    }
}
