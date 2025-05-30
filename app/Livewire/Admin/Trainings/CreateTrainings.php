<?php

namespace App\Livewire\Admin\Trainings;

use App\Models\Admin\Training;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateTrainings extends Component
{
    public $user;
    public $icon_url;
    public $title;
    public $subtitle;
    public $description;

    protected $rules = [
        'icon_url' => 'required',
        'title' => 'required|string|max:255',
        'subtitle' => 'nullable',
        'description' => 'string|max:1000',
    ];

    public function resetForm()
    {
        $this->reset(['title', 'description', 'icon_url', 'subtitle',]);
        $this->dispatch('form-reset');
    }

    public function createTraining()
    {
        $this->validate();
        
        try {
            Training::create([
                'admin_id' => Auth::id(),
                'icon_url' => $this->icon_url,
                'title' => $this->title,
                'subtitle' => trim($this->subtitle) ?: null,
                'description' => trim($this->description) ?: null,
            ]);

            session()->flash('message', 'Training created successfully!');

            $this->reset();

            $this->redirect('/dashboard/trainings', navigate: true);
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
            return $this->redirect('/dashboard/trainings', navigate: true);
        }
    }


    public function render()
    {
        return view('livewire.admin.trainings.create-trainings');
    }
}
