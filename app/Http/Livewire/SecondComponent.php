<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SecondComponent extends Component
{
    public $showOrig = false;
    public function render()
    {
        return view('livewire.second-component');
    }
}
