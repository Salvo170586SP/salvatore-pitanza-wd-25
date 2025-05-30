<?php

namespace App\Livewire\Admin\Trainings;

use App\Models\Admin\Training;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EditTrainings extends Component
{
    public $training;
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

    public function mount(Training $training)
    {
        $this->training = $training;
        $this->icon_url = $training->icon_url;
        $this->title = $training->title;
        $this->subtitle = $training->subtitle;
        $this->description = $training->description;
    }

    public function resetForm()
    {
        $this->reset(['title', 'description', 'icon_url', 'subtitle',]);
        $this->dispatch('form-reset');
    }

    public function editTraining()
    {
        // Verifica nuovamente l'autorizzazione
        if (!Auth::check() || $this->training->admin_id !== Auth::id()) {
            abort(403, 'You are not authorized');
        }

        $this->validate();

        try {
            $this->training->update([
                'icon_url' => $this->icon_url,
                'title' => $this->title,
                'subtitle' => trim($this->subtitle) ?: null,
                'description' => trim($this->description) ?: null,
            ]);

            session()->flash('message', 'Training updated successfully!');

            $this->redirect('/dashboard/trainings', navigate: true);
            
        } catch (\Illuminate\Validation\ValidationException $e) {
            $this->dispatch('validation-error', $e->validator->errors()->first());
            return;
        }
    }

    public function render()
    {
        return view('livewire.admin.trainings.edit-trainings');
    }
}
