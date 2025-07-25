<?php

use App\Livewire\Admin\Biographies\CreateBiography;
use App\Livewire\Admin\Biographies\EditBiography;
use App\Livewire\Admin\Biographies\IndexBiography;
use App\Livewire\Admin\Dashboard\IndexDashboard;
use App\Livewire\Admin\Documents\CreateDocument;
use App\Livewire\Admin\Documents\EditDocument;
use App\Livewire\Admin\Documents\IndexDocuments;
use App\Livewire\Admin\Documents\ShowDocument;
use App\Livewire\Admin\Drawings\CreateDrawings;
use App\Livewire\Admin\Drawings\EditDrawings;
use App\Livewire\Admin\Drawings\IndexDrawings;
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
});

 
/* front */
Route::get('/', Home::class)->name('home');
Route::get('/drawings', Drawings::class)->name('drawings');
Route::get('/all-projects', AllProjects::class)->name('all-projects');
Route::get('/documents', Documents::class)->name('documents');

/* back */
Route::middleware(['auth', 'verified'])->group(function () {
    Route::redirect('settings', 'settings/profile');
    Route::get('dashboard/insight', IndexDashboard::class)->name('dashboard.index-dashboard');

    Route::get('dashboard/projects', IndexProjects::class)->name('dashboard.projects');
    Route::get('dashboard/projects/create', CreateProject::class)->name('dashboard.projects.create-projects');
    Route::get('dashboard/projects/{project}', ShowProject::class)->name('dashboard.projects.show-projects');
    Route::get('dashboard/projects/{project}/edit', EditProject::class)->name('dashboard.projects.edit-projects');

    Route::get('dashboard/trainings', IndexTrainings::class)->name('dashboard.trainings');
    Route::get('dashboard/trainings/create', CreateTrainings::class)->name('dashboard.create-trainings');
    Route::get('dashboard/trainings/{training}', ShowTrainings::class)->name('dashboard.show-trainings');
    Route::get('dashboard/trainings/{training}/edit', EditTrainings::class)->name('dashboard.edit-trainings');

    Route::get('dashboard/experiences', IndexExperiences::class)->name('dashboard.experiences');
    Route::get('dashboard/experiences/create', CreateExperiences::class)->name('dashboard.experiences.create-experience');
    Route::get('dashboard/experiences/{experience}', ShowExperiences::class)->name('dashboard.experiences.show-experience');
    Route::get('dashboard/experiences/{experience}/edit', EditExperiences::class)->name('dashboard.experiences.edit-experience');
 
    Route::get('dashboard/drawings', IndexDrawings::class)->name('dashboard.drawings');
    Route::get('dashboard/drawings/create', CreateDrawings::class)->name('dashboard.drawings.create-drawings');
    Route::get('dashboard/drawings/{drawing}/edit', EditDrawings::class)->name('dashboard.drawings.edit-drawings');
    
    Route::get('dashboard/documents', IndexDocuments::class)->name('dashboard.documents');
    Route::get('dashboard/documents/create', CreateDocument::class)->name('dashboard.documents.create-document');
    Route::get('dashboard/documents/{document}', ShowDocument::class)->name('dashboard.documents.show-document');
    Route::get('dashboard/documents/{document}/edit', EditDocument::class)->name('dashboard.documents.edit-document');
 

    Route::get('dashboard/biographies', IndexBiography::class)->name('dashboard.biographies');
    Route::get('dashboard/biographies/create', CreateBiography::class)->name('dashboard.create-biographies');
    Route::get('dashboard/biographies/{user}/edit', EditBiography::class)->name('dashboard.edit-biographies');
    
    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
