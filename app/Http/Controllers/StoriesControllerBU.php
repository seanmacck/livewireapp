<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;

class StoriesController extends Controller
{
    public function index()
    {
        $stories = Story::where('user_id', auth()->user()->id)
        ->orderBy('id', 'DESC')->paginate(3);
        //dd($stories);                                // Dump and die all stories from database
        return view('stories.stories', ['stories' => $stories]);    // Passes key variable $stories to the view, stories.blade file
    }

    public function show(Story $story)
    {
        //$story = Story::findOrFail($id);        // Creates 404 page for non=existing pages
        //dd($story);
        return view('stories.show', ['story' => $story]);
    }
}
