<?php

namespace App\Http\Livewire;

use Livewire\Component;

class KanyePage extends Component
{
    public $getQuote = false;
    public $showComp = false;
    public function render()
    {
        return view('livewire.kanye-page')->extends('layouts.tailwind');
    }
}
