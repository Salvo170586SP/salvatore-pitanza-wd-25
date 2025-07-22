<?php

namespace App\Livewire;

use Livewire\Component;

class LanguageSwitcher extends Component
{
    public $lang;

    public function mount()
    {
        $this->lang = session('locale', config('app.locale'));
    }

    public function setLanguage($lang)
    {
        $this->lang = $lang;
        session()->put('locale', $lang);

        return redirect('/');
    }

    public function render()
    {
        return view('livewire.language-switcher');
    }
}
