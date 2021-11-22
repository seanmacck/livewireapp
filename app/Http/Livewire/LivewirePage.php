<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class LivewirePage extends Component
{
    public $showKanyeQuotes = false;
    public $showWomenText = false;
    public $showMenText = false;
    public $showCompanyText = false;
    public $showQuote = false;
    public $showDiv = false;

    public function render()
    {
        return view('livewire.livewire-page')->extends('layouts.tailwind');

    }

    public function index()
    {
        $response = Http::get("https://api.kanye.rest/");
        return view('kanyeApi', ['response' => $response]);
    }
}
