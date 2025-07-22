<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Admin\Project;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateProject extends Component
{
    use WithFileUploads;

    public $user;
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

    public function resetForm()
    {
        $this->reset();
        $this->dispatch('form-reset');
    }

    public function createProject()
    {
        $this->validate();
        
        try {
            $url = null;
            $name_img = null;
            if ($this->img_url) {
                $url = $this->img_url->store('projects', 'public');
                $name_img = $this->img_url->getClientOriginalName();
            }

            Project::create([
                'admin_id' => Auth::id(),
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

            session()->flash('message', 'Project created successfully.');

            $this->reset();
            
            return $this->redirect('/dashboard/projects', navigate: true);
        } catch (\Illuminate\Validation\ValidationException $e) {
            $this->dispatch('validation-error', $e->validator->errors()->first());
            return;
        }
    }

    public function render()
    {
        return view('livewire.admin.projects.create-project');
    }
}
