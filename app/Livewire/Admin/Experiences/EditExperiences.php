<?php

namespace App\Livewire\Admin\Experiences;

use App\Models\Admin\Experience;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EditExperiences extends Component
{
    public $experience;
    public $title;
    public $subtitle;
    public $description;
    public $title_ita;
    public $subtitle_ita;
    public $description_ita;

    protected $rules = [
        'title' => 'required|string|max:255',
        'subtitle' => 'nullable',
        'description' => 'string|max:1000',
        'title_ita' => 'required|string|max:255',
        'subtitle_ita' => 'nullable',
        'description_ita' => 'string|max:1000',
    ];

    public function mount(Experience $experience)
    {
        $this->experience = $experience;
        $this->title = $experience->title;
        $this->subtitle = $experience->subtitle;
        $this->description = $experience->description;
        $this->title_ita = $experience->title_ita;
        $this->subtitle_ita = $experience->subtitle_ita;
        $this->description_ita = $experience->description_ita;
    }

    public function resetForm()
    {
        $this->reset();
        $this->dispatch('form-reset');
    }

    public function editExperience()
    {
        // Verifica nuovamente l'autorizzazione
        if (!Auth::check()|| $this->experience->admin_id !== Auth::id()) {
            abort(403, 'You are not authorized');
        }

        $this->validate();

        try {
            $this->experience->update([
                'title' => $this->title,
                'subtitle' => trim($this->subtitle) ?: null,
                'description' => trim($this->description) ?: null,
                'title_ita' => $this->title_ita,
                'subtitle_ita' => trim($this->subtitle_ita) ?: null,
                'description_ita' => trim($this->description_ita) ?: null,
            ]);

            session()->flash('message', 'Experience updated successfully!');

            $this->redirect('/dashboard/experiences', navigate: true);
        } catch (\Illuminate\Validation\ValidationException $e) {
            $this->dispatch('validation-error', $e->validator->errors()->first());
            return;
        }
    }

    public function render()
    {
        return view('livewire.admin.experiences.edit-experiences');
    }
}
