<?php

namespace App\Livewire\Admin\Experiences;

use App\Models\Admin\Experience;
use Livewire\Component;

class ShowExperiences extends Component
{
    public $experience;

    public function mount(Experience $experience)
    {
        $this->experience = $experience;
    }

    public function render()
    {
        return view('livewire.admin.experiences.show-experiences');
    }
}
