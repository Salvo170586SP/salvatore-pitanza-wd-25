<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Admin\Project;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class EditProject extends Component
{
    use WithFileUploads;

    public $project;
    public $title;
    public $title_ita;
    public $description;
    public $description_ita;
    public $img_url;
    public $url_git;
    public $url_web;
    public $img_name;
    public $is_aviable = false;

    protected $rules = [
        'title' => 'required|string|max:255',
        'title_ita' => 'required|string|max:255',
        'description' => 'string|max:1000',
        'description_ita' => 'string|max:1000',
        'img_url' => 'nullable',
        'url_git' => 'nullable|url',
        'url_web' => 'nullable|url',
        'is_aviable' => 'boolean',
    ];

    public function mount(Project $project)
    {
        $this->project = $project;
        $this->title = $project->title;
        $this->title_ita = $project->title_ita;
        $this->description = $project->description;
        $this->description_ita = $project->description_ita;
        $this->url_git = $project->url_git;
        $this->url_web = $project->url_web;
        $this->img_name = $project->img_name;
        $this->is_aviable = $project->is_aviable;

        if ($project->img_url) {
            $this->img_url = asset('storage/' . $project->img_url);
        }
    }

    public function resetForm()
    {
        $this->reset();
        $this->dispatch('form-reset');
    }

    public function editProject()
    {
        // Verifica nuovamente l'autorizzazione
        if (!Auth::check() || $this->project->admin_id !== Auth::id()) {
            abort(403, 'You are not authorized');
        }

        $this->validate();
        
        try {
            // Gestione dell'immagine
            $url = $this->project->img_url;  // Mantiene l'URL esistente come default
            $name_img = $this->project->img_name;  // Mantiene il nome esistente come default

            // Se è stata caricata una nuova immagine
            if ($this->img_url && !is_string($this->img_url)) {
                // Se esiste già un'immagine, la eliminiamo
                if ($this->project->img_url) {
                    Storage::disk('public')->delete($this->project->img_url);
                }

                // Salva la nuova immagine
                $name_img = $this->img_url->getClientOriginalName();
                $url = $this->img_url->store('progetti', 'public');
            }

            $this->project->update([
                'title' => $this->title,
                'title_ita' => $this->title_ita,
                'description' => trim($this->description) ?: null,
                'description_ita' => trim($this->description_ita) ?: null,
                'img_url' => $url,
                'img_name' => $name_img,
                'url_git' => trim($this->url_git) ?: null,
                'url_web' => trim($this->url_web) ?: null,
                'is_aviable' => $this->is_aviable,
            ]);

            session()->flash('message', 'Project updated successfully.');

            return $this->redirect('/dashboard/projects', navigate: true);
        } catch (\Illuminate\Validation\ValidationException $e) {
            $this->dispatch('validation-error', $e->validator->errors()->first());
            return;
        }
    }

    public function render()
    {
        return view('livewire.admin.projects.edit-project');
    }
}
