<?php

namespace App\Livewire\Admin\Drawings;

use App\Models\Admin\Drawing;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
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
        $drawing = Drawing::findOrFail($this->drawingId);
        // Verifica nuovamente l'autorizzazione
        if (!Auth::check() || $drawing->admin_id !== Auth::id()) {
            abort(403, 'You are not authorized');
        }

        try {
            if ($drawing) {
                Storage::disk('public')->delete($drawing->img_url);
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
