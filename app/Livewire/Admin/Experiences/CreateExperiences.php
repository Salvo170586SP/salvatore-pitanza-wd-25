<?php

namespace App\Livewire\Admin\Experiences;

use App\Models\Admin\Experience;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreateExperiences extends Component
{
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

    public function resetForm()
    {
        $this->reset();
        $this->dispatch('form-reset');
    }

    public function createExperience()
    {
        $this->validate();

        try {
            Experience::create([
                'admin_id' => Auth::id(),
                'title' => $this->title,
                'subtitle' => trim($this->subtitle) ?: null,
                'description' => trim($this->description) ?: null,
                'title_ita' => $this->title_ita,
                'subtitle_ita' => trim($this->subtitle_ita) ?: null,
                'description_ita' => trim($this->description_ita) ?: null,
            ]);

            session()->flash('message', 'Experience created successfully!');

            $this->reset();

            $this->redirect('/dashboard/experiences', navigate: true);
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
            return $this->redirect('/dashboard/experiences', navigate: true);
        }
    }

    public function render()
    {
        return view('livewire.admin.experiences.create-experiences');
    }
}
