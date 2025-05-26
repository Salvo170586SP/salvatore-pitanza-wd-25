<?php

namespace App\Livewire\Admin\Experiences;

use App\Models\Admin\Experience;
use Livewire\Component;
use Livewire\WithPagination;

class IndexExperiences extends Component
{
    use WithPagination;

    public $search = '';

    public function render()
    {
        $experiences = Experience::query();

        if ($this->search) {
            $experiences = $experiences->where('title', 'like', '%' . $this->search . '%');
        }

        $experiences = $experiences->paginate(5);
        
        return view('livewire.admin.experiences.index-experiences', compact('experiences'));
    }
}
