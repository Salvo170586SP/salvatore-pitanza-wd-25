<?php

namespace App\Livewire;

use Livewire\Component;

class AllProjects extends Component
{
    public function render()
    {
        return view('livewire.all-projects')->layout('layouts.app');
    }
}
