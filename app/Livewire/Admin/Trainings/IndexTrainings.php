<?php

namespace App\Livewire\Admin\Trainings;

use App\Models\Admin\Training;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class IndexTrainings extends Component
{
    use WithPagination;

    public $search = '';


    public function render()
    {
        $trainings = Training::query();

        if ($this->search) {
            $trainings = $trainings->where('title', 'like', '%' . $this->search . '%');
        }

        $trainings = $trainings->paginate(5);

        return view('livewire.admin.trainings.index-trainings', compact('trainings'));
    }
}
