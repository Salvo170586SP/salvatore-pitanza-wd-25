<?php

namespace App\Livewire\Admin\Documents;

use App\Models\Admin\Document;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditDocument extends Component
{
    use WithFileUploads;

    public $document;
    public $title;
    public $title_ita;
    public $description;
    public $description_ita;
    public $img_url;
    public $img_name;

    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'string|max:1000',
        'img_url' => 'required',
    ];

    public function mount(Document $document)
    {
        $this->document = $document;
        $this->title = $document->title;
        $this->title_ita = $document->title_ita;
        $this->description = $document->description;
        $this->description_ita = $document->description_ita;
        $this->img_name = $document->img_name;

        if ($document->img_url) {
            $this->img_url = asset('storage/' . $document->img_url);
        }
    }

    public function resetForm()
    {
        $this->reset();
        $this->dispatch('form-reset');
    }

    public function isPdf()
    {
        // Controlliamo se il file ha estensione .pdf
        if (!$this->img_url) {
            return false;
        }

        $extension = pathinfo($this->img_url, PATHINFO_EXTENSION);
        return strtolower($extension) === 'pdf';
    }

    public function editProject()
    {
        // Verifica nuovamente l'autorizzazione
        if (!Auth::check() || $this->document->admin_id !== Auth::id()) {
            abort(403, 'You are not authorized');
        }

        $this->validate();

        try {
            // Gestione dell'immagine
            $url = $this->document->img_url;  // Mantiene l'URL esistente come default
            $name_img = $this->document->img_name;  // Mantiene il nome esistente come default

            // Se è stata caricata una nuova immagine
            if ($this->img_url && !is_string($this->img_url)) {
                // Se esiste già un'immagine, la eliminiamo
                if ($this->document->img_url) {
                    Storage::disk('public')->delete($this->document->img_url);
                }

                // Salva la nuova immagine
                $name_img = $this->img_url->getClientOriginalName();
                $url = $this->img_url->store('documents', 'public');
            }

            $this->document->update([
                'title' => $this->title,
                'title_ita' => $this->title_ita,
                'description' => trim($this->description) ?: null,
                'description_ita' => trim($this->description_ita) ?: null,
                'img_url' => $url,
                'img_name' => $name_img
            ]);

            session()->flash('message', 'Document updated successfully.');

            return $this->redirect('/dashboard/documents', navigate: true);
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
            return $this->redirect('/dashboard/documents', navigate: true);
        }
    }

    public function render()
    {
        return view('livewire.admin.documents.edit-document');
    }
}
