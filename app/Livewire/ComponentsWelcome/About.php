<?php

namespace App\Livewire\ComponentsWelcome;

use Livewire\Component;

class About extends Component
{
    public function render()
    {
        $biographies = \App\Models\User::select('description','description_ita', 'img_url', 'img_name')
            ->whereNotNull('description')
            ->whereNotNull('description_ita')
            ->whereNotNull('img_url')
            ->whereNotNull('img_name')
            ->where(function($query) {
                $query->where('description', '!=', '')
                    ->where('description_ita', '!=', '')
                    ->where('img_url', '!=', '')
                    ->where('img_name', '!=', '');
            })
            ->get(); 
        return view('livewire.components-welcome.about', compact('biographies'));
    }
}
