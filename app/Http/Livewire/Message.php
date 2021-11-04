<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Message extends Component
{
    public $messages = ['First message', 'Second message', 'Third message'];
    public $activeMessages;


    public function render()
    {
        return view('livewire.message');
    }
}
