<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class kanyeController extends Controller
{
    function index()
    {
        $response = Http::get("https://api.kanye.rest/");
        return view('kanyeApi', ['response' => $response]);
    }
}
