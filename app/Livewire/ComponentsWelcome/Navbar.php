<?php

namespace App\Livewire\ComponentsWelcome;

use Livewire\Component;
use Livewire\Attributes\On;


class Navbar extends Component
{
 
    public function render()
    {
        app()->setLocale(session('locale', config('app.locale')));
        return view('livewire.components-welcome.navbar');
    }
}
