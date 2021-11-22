<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Sections extends Component
{
   public $section = 'home';

    public function render()
    {
        return view('livewire.sections')->extends('layouts.tailwind');
    }

    public function mount()
    {
        //$this->section = 'home';
    }

    public function updatedSection()
    {

    }
}
