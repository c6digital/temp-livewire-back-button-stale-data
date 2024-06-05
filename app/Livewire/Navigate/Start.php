<?php

namespace App\Livewire\Navigate;

use Livewire\Component;

class Start extends Component
{
    public function next()
    {
        sleep(3);

        return $this->redirect('/navigate/go-back', navigate: true);
    }

    public function render()
    {
        return view('livewire.navigate.start');
    }
}
