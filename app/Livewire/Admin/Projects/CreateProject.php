<?php

namespace App\Livewire\Admin\Projects;

use App\Models\Admin\Project;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateProject extends Component
{
    use WithFileUploads;

    public $title;
    public $description;
    public $img_url;
    public $url_git;
    public $url_web;
    public $img_name;
    public $is_aviable = false;

    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'string|max:1000',
        'img_url' => 'required',
        'url_git' => 'nullable|url',
        'url_web' => 'nullable|url',
        'is_aviable' => 'boolean',
    ];

    public function resetForm()
    {
        $this->reset(['title', 'description', 'img_url', 'url_git', 'url_web', 'img_name', 'is_aviable']);
        $this->dispatch('form-reset');
    }

    public function createProject()
    {
        $this->validate();

        $url = null;
        if ($this->img_url) {
            $url = $this->img_url->store('projects', 'public');
            $name_img = $this->img_url->getClientOriginalName();
        }

        Project::create([
            'admin_id' => Auth::id(),
            'title' => $this->title,
            'description' => trim($this->description) ?: null,
            'img_url' => $url,
            'img_name' => $name_img,
            'url_git' => trim($this->url_git) ?: null,
            'url_web' => trim($this->url_web) ?: null,
            'is_aviable' => $this->is_aviable,
        ]);

        session()->flash('message', 'Project created successfully.');

        $this->reset();

        return $this->redirect('/admin/projects', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.projects.create-project');
    }
}
