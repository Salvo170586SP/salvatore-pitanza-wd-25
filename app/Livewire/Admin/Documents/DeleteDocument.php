<?php

namespace App\Livewire\Admin\Documents;

use App\Models\Admin\Document;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use LivewireUI\Modal\ModalComponent;

class DeleteDocument extends ModalComponent
{
    public $documentId;

    public function mount($documentId)
    {
        $this->documentId = $documentId;
    }

    public function deleteDocument()
    {
        $document = Document::findOrFail($this->documentId);
        // Verifica nuovamente l'autorizzazione
        if (!Auth::check() || $document->admin_id !== Auth::id()) {
            abort(403, 'You are not authorized');
        }

        try {
            if ($document) {
                Storage::disk('public')->delete($document->img_url);
                $document->delete();
            }

            $this->dispatch('closeModal');
            session()->flash('message', 'Document deleted successfully!');
            $this->redirect('/admin/documents', navigate: true);
        } catch (\Illuminate\Validation\ValidationException $e) {
            $this->dispatch('validation-error', $e->validator->errors()->first());
            return;
        }
    }

    public function render()
    {
        return view('livewire.admin.documents.delete-document');
    }
}
