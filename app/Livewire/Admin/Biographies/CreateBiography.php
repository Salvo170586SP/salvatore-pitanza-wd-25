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
        $this->validate();

        $userId = Auth::id();
        $user = User::findOrFail($userId);

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

        return $this->redirect('/admin/biographies', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.biographies.create-biography');
    }
}
