<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class LivewirePage extends Component
{
    public $showQuote = false;
    public $section = 'home';

    public function render()
    {
        return view('livewire.livewire-page')->extends('layouts.tailwind');
    }

    public function mount()
    {
        $this->section = 'home';

    }

    public function index()
    {
        $response = Http::get("https://api.kanye.rest/");
        return view('kanyeApi', ['response' => $response]);
    }
}
