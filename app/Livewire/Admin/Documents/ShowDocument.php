<?php

namespace App\Livewire\Admin\Documents;

use App\Models\Admin\Document;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ShowDocument extends Component
{
    public $document;
    public $showImagePreview = false;

    public function mount(Document $document)
    {
        $this->document = $document;
    }

    public function isPdf()
    {
        // Controlliamo se il file ha estensione .pdf
        if (!$this->document->img_url) {
            return false;
        }
        
        $extension = pathinfo($this->document->img_url, PATHINFO_EXTENSION);
        return strtolower($extension) === 'pdf';
    }

    public function render()
    {
        return view('livewire.admin.documents.show-document');
    }
}
