<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Model\Post;

class ShowPosts extends Component
{

    public $post;

    public function mount($post)
    {
        $this->post = $post;
    }

    public function render()
    {
        return view('livewire.show-posts')->extends('layouts.layout');
    }
}
