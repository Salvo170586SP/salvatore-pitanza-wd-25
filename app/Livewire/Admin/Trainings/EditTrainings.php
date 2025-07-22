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

    public function mount(Training $training)
    {
        $this->training = $training;
        $this->icon_url = $training->icon_url;
        $this->title = $training->title;
        $this->title_ita = $training->title_ita;
        $this->subtitle = $training->subtitle;
        $this->subtitle_ita = $training->subtitle_ita;
        $this->description = $training->description;
        $this->description_ita = $training->description_ita;
    }

    public function resetForm()
    {
        $this->reset();
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
                'title_ita' => $this->title_ita,
                'subtitle' => trim($this->subtitle) ?: null,
                'subtitle_ita' => trim($this->subtitle_ita) ?: null,
                'description' => trim($this->description) ?: null,
                'description_ita' => trim($this->description_ita) ?: null,
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
