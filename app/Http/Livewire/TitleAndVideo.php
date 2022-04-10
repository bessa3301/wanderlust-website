<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TitleAndVideo extends Component
{
    public $title;
    public $gifPath;
    public function render()
    {
        return view('livewire.title-and-video');
    }
}
