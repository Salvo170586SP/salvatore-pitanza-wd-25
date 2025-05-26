<?php

namespace App\Livewire\Admin\Drawings;

use App\Models\Admin\Drawing;
use LivewireUI\Modal\ModalComponent;

class DeleteDrawings extends ModalComponent
{
    public $drawingId;

    public function mount($drawingId)
    {
        $this->drawingId = $drawingId;
    }

    public function deleteDrawing()
    {
        try {

            $drawing = Drawing::findOrFail($this->drawingId);

            if ($drawing) {
                $drawing->delete();
            }

            $this->dispatch('closeModal');
            session()->flash('message', 'Drawing deleted successfully!');
            $this->redirect('/admin/drawings', navigate: true);
        } catch (\Illuminate\Validation\ValidationException $e) {
            $this->dispatch('validation-error', $e->validator->errors()->first());
            return;
        }
    }

    public function render()
    {
        return view('livewire.admin.drawings.delete-drawings');
    }
}
