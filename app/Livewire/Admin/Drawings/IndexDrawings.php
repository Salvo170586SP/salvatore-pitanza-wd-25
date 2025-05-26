<?php

namespace App\Livewire\Admin\Drawings;

use App\Models\Admin\Drawing;
use Livewire\Component;
use Livewire\WithPagination;

class IndexDrawings extends Component
{
    use WithPagination;
    public $search = '';

    public function render()
    {
        $drawings = Drawing::query();

        if ($this->search) {
            $drawings = $drawings->where('title', 'like', '%' . $this->search . '%');
        }

        $drawings = $drawings->paginate(5);

        return view('livewire.admin.drawings.index-drawings', compact('drawings'));
    }
}
