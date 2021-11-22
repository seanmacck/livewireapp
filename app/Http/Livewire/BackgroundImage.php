<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BackgroundImage extends Component
{

    public $showMenText = false;
    public $showCompanyText = false;
    public $getQuote = false;
    public $showComp = false;
    public $showWomenText = false;
    public $showDiv = false;

    public function render()
    {
        return view('livewire.background-image');


    }

}
