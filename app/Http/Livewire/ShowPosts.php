<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use App\Models\Post as ModelsPost;


class ShowPosts extends Component
{

    public $post;

    public function mount( Post $post)
    {
        $this->post = $post;
    }

    public function render()
    {
        return view('livewire.show-posts')->extends('layouts.layout');
    }
}
