<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TitleAndContent extends Component
{
    public $title;
    public $content;
    public function render()
    {
        return view('livewire.title-and-content');
    }
}
