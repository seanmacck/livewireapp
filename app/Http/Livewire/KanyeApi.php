<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Controllers\kanyeController;
use Illuminate\Support\Facades\Http;

class KanyeApi extends Component
{

    public function render()
    {
        $response = Http::get("https://api.kanye.rest/");
        return view('livewire.kanye-api', ['response' => $response])->extends('layouts.tailwind');
    }

}
