<?php

use App\Livewire\AllProjects;
use App\Livewire\Arts;
use App\Livewire\Documents;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})/* ->name('home') */;

Route::get('/', Home::class)->name('home');
Route::get('/arts', Arts::class)->name('arts');
Route::get('/all-projects', AllProjects::class)->name('all-projects');
Route::get('/documents', Documents::class)->name('documents');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
