<?php

use App\Livewire\Admin\Biographies\CreateBiography;
use App\Livewire\Admin\Biographies\EditBiography;
use App\Livewire\Admin\Biographies\IndexBiography;
use App\Livewire\Admin\Drawings\CreateDrawings;
use App\Livewire\Admin\Drawings\EditDrawings;
use App\Livewire\Admin\Drawings\IndexDrawings;
use App\Livewire\Admin\Drawings\ShowDrawings;
use App\Livewire\Admin\Experiences\CreateExperiences;
use App\Livewire\Admin\Experiences\EditExperiences;
use App\Livewire\Admin\Experiences\IndexExperiences;
use App\Livewire\Admin\Experiences\ShowExperiences;
use App\Livewire\Admin\Projects\CreateProject;
use App\Livewire\Admin\Projects\EditProject;
use App\Livewire\Admin\Projects\IndexProjects;
use App\Livewire\Admin\Projects\ShowProject;
use App\Livewire\Admin\Trainings\CreateTrainings;
use App\Livewire\Admin\Trainings\EditTrainings;
use App\Livewire\Admin\Trainings\IndexTrainings;
use App\Livewire\Admin\Trainings\ShowTrainings;
use App\Livewire\AllProjects;
use App\Livewire\Documents;
use App\Livewire\Drawings;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})/* ->name('home') */;

Route::get('/', Home::class)->name('home');
Route::get('/drawings', Drawings::class)->name('drawings');
Route::get('/all-projects', AllProjects::class)->name('all-projects');
Route::get('/documents', Documents::class)->name('documents');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');
    Route::get('admin/projects', IndexProjects::class)->name('admin.projects');
    Route::get('admin/projects/create', CreateProject::class)->name('admin.projects.create-projects');
    Route::get('admin/projects/{project}', ShowProject::class)->name('admin.projects.show-projects');
    Route::get('admin/projects/{project}/edit', EditProject::class)->name('admin.projects.edit-projects');

    Route::get('admin/trainings', IndexTrainings::class)->name('admin.trainings');
    Route::get('admin/trainings/create', CreateTrainings::class)->name('admin.create-trainings');
    Route::get('admin/trainings/{training}', ShowTrainings::class)->name('admin.show-trainings');
    Route::get('admin/trainings/{training}/edit', EditTrainings::class)->name('admin.edit-trainings');

    Route::get('admin/experiences', IndexExperiences::class)->name('admin.experiences');
    Route::get('admin/experiences/create', CreateExperiences::class)->name('admin.experiences.create-experience');
    Route::get('admin/experiences/{experience}', ShowExperiences::class)->name('admin.experiences.show-experience');
    Route::get('admin/experiences/{experience}/edit', EditExperiences::class)->name('admin.experiences.edit-experience');
 
    Route::get('admin/drawings', IndexDrawings::class)->name('admin.drawings');
    Route::get('admin/drawings/create', CreateDrawings::class)->name('admin.drawings.create-drawings');
    Route::get('admin/drawings/{drawing}', ShowDrawings::class)->name('admin.drawings.show-drawings');
    Route::get('admin/drawings/{drawing}/edit', EditDrawings::class)->name('admin.drawings.edit-drawings');
 

    Route::get('admin/biographies', IndexBiography::class)->name('admin.biographies');
    Route::get('admin/biographies/create', CreateBiography::class)->name('admin.create-biographies');
    Route::get('admin/biographies/{user}/edit', EditBiography::class)->name('admin.edit-biographies');
    
    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
