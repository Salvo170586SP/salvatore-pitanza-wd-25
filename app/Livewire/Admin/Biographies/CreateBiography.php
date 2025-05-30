<?php

namespace App\Livewire\Admin\Biographies;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateBiography extends Component
{
    use WithFileUploads;

    public $description;
    public $img_url;
    public $img_name;

    public function mount()
    {
        $biographyExists = User::select('description', 'img_url', 'img_name')
            ->whereNotNull('description')
            ->whereNotNull('img_url')
            ->whereNotNull('img_name')
            ->where(function ($query) {
                $query->where('description', '!=', '')
                    ->where('img_url', '!=', '')
                    ->where('img_name', '!=', '');
            })
            ->exists();

        if ($biographyExists) {
            session()->flash('message', 'A biography already exists');
            return $this->redirect('/admin/biographies', navigate: true);
        }
    }

    protected $rules = [
        'description' => 'string|max:2000',
        'img_url' => 'required',
    ];

    public function resetForm()
    {
        $this->reset(['description', 'img_url']);
        $this->dispatch('form-reset');
    }

    public function createBiography()
    {
        $userId = Auth::id();
        $user = User::findOrFail($userId);

        // Verifica nuovamente l'autorizzazione
        if ($user->id !== Auth::id()) {
            abort(403, 'You are not authorized');
        }
        
        $this->validate();
        
        try {
            $url = null;
            if ($this->img_url) {
                $url = $this->img_url->store('imgs_profile', 'public');
                $name_img = $this->img_url->getClientOriginalName();
            }

            $user->update([
                'description' => trim($this->description) ?: null,
                'img_url' => $url,
                'img_name' => $name_img,
            ]);

            session()->flash('message', 'Biography created successfully.');

            $this->reset();

            return $this->redirect('/dashboard/biographies', navigate: true);
        } catch (\Exception $e) {
            session()->flash('error', 'An error occurred while processing the image.');
            return;
        }
    }

    public function render()
    {
        return view('livewire.admin.biographies.create-biography');
    }
}
