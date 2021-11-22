<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MenComponent extends Component
{
    public $showMenText = false;
    public function render()
    {
        return view('livewire.men-component');
    }
}
