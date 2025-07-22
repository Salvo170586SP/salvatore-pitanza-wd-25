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
    public $title_ita;
    public $subtitle;
    public $subtitle_ita;
    public $description;
    public $description_ita;

    protected $rules = [
        'icon_url' => 'required',
        'title' => 'required|string|max:255',
        'title_ita' => 'required|string|max:255',
        'subtitle' => 'nullable',
        'subtitle_ita' => 'nullable',
        'description' => 'string|max:1000',
        'description_ita' => 'string|max:1000',
    ];

    public function resetForm()
    {
        $this->reset();
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
                'title_ita' => $this->title_ita,
                'subtitle' => trim($this->subtitle) ?: null,
                'subtitle_ita' => trim($this->subtitle_ita) ?: null,
                'description' => trim($this->description) ?: null,
                'description_ita' => trim($this->description_ita) ?: null,
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
