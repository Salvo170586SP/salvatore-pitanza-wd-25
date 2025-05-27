<?php

namespace App\Livewire\Admin\Documents;

use App\Models\Admin\Document;
use Livewire\Component;
use Livewire\WithPagination;

class IndexDocuments extends Component
{
    use WithPagination;
    public $search = '';

    public function render()
    {
        $documents = Document::query();

        if ($this->search) {
            $documents = $documents->where('title', 'like', '%' . $this->search . '%');
        }

        $documents = $documents->paginate(5);

        return view('livewire.admin.documents.index-documents', compact('documents'));
    }
}
