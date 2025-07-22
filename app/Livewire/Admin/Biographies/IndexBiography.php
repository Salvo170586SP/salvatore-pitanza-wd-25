<?php

namespace App\Livewire\Admin\Biographies;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class IndexBiography extends Component
{
    public function render()
    {
        $biographies = User::select('description', 'description_ita', 'img_url', 'img_name')
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

        return view('livewire.admin.biographies.index-biography', compact('biographies'));
    }
}
