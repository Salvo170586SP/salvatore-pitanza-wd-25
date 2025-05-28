<?php

namespace App\Livewire\Admin\Biographies;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditBiography extends Component
{
    use WithFileUploads;

    public $user;
    public $description;
    public $img_url;
    public $img_name;

    protected $rules = [
        'description' => 'required|string|min:10|max:2000',
        'img_url' => 'required',
    ];


    public function mount(User $user)
    {
        // Verifichiamo che l'utente sia autenticato e sia l'admin del documento
        if (!Auth::check() || $user->id !== Auth::id()) {
            abort(403, 'You are not authorized');
        }

        $this->user = $user;
        $this->description = $user->description;
        $this->img_name = $user->img_name;

        if ($user->img_url) {
            $this->img_url = asset('storage/' . $user->img_url);
        }
    }

    public function resetForm()
    {
        $this->reset(['description', 'img_url']);
        $this->dispatch('form-reset');
    }

    public function editBiography()
    {
        // Verifica nuovamente l'autorizzazione
        if (!Auth::check() || $this->user->id !== Auth::id()) {
            abort(403, 'You are not authorized');
        }

        $this->validate();

        try {
            // Gestione dell'immagine
            $url = $this->user->img_url;  // Mantiene l'URL esistente come default
            $name_img = $this->user->img_name;  // Mantiene il nome esistente come default

            // Se è stata caricata una nuova immagine
            if ($this->img_url && !is_string($this->img_url)) {
                $this->validate([
                    'img_url' => 'image|max:2048|mimes:jpg,jpeg,png,gif'
                ]);

                // Se esiste già un'immagine, la eliminiamo
                if ($this->user->img_url) {
                    Storage::disk('public')->delete($this->user->img_url);
                }

                // Salva la nuova immagine
                $name_img = $this->img_url->getClientOriginalName();
                $url = $this->img_url->store('imgs_profile', 'public');
            }

            $this->user->update([
                'description' => trim($this->description) ?: null,
                'img_url' => $url,
                'img_name' => $name_img,
            ]);

            session()->flash('message', 'Biografia aggiornata con successo.');
            return $this->redirect('/admin/biographies', navigate: true);
        } catch (\Exception $e) {
            session()->flash('error', 'Si è verificato un errore durante l\'aggiornamento della biografia: ' . $e->getMessage());
            return null;
        }
    }

    public function render()
    {
        return view('livewire.admin.biographies.edit-biography');
    }
}
