<?php

namespace App\Livewire;

use App\Models\Admin\Drawing;
use Livewire\Component;

class Drawings extends Component
{
    public function render()
    {
        $drawings = Drawing::all();
        return view('livewire.drawings', compact('drawings'))
            ->layout('layouts.app');
    }
}
