<?php

namespace App\Livewire;

use App\Models\Admin\Document;
use Livewire\Component;

class Documents extends Component
{
    public function render()
    {
        $documents = Document::all();

        return view('livewire.documents', compact('documents'))->layout('layouts.app');
    }
}
