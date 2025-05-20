<?php

namespace App\Livewire;

use Livewire\Component;

class Arts extends Component
{
    public function render()
    {
        return view('livewire.arts')
            ->layout('layouts.app');
    }
}
