<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboard extends Controller
{
    public $section = 'home';

    public function index()
    {
        return view('livewire.livewire-page');
    }

    public function updateSection()
    {

    }

}
