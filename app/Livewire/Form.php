<?php

namespace App\Livewire;

use Livewire\Component;

class Form extends Component
{
    public $name;

    public function submit()
    {
        $this->validate([
            'name' => ['required', 'string'],
        ]);

        return $this->redirect('/now-go-back');
    }

    public function render()
    {
        return view('livewire.form');
    }
}
