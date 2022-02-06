<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CarrouselItemNumbered extends Component
{
    public $number;
    public $message;
    public function __construct($number, $message)
    {
        $this->number = $number;
        $this->message = $message;
    }

    public function render()
    {
        return view('components.carrousel-item-numbered');
    }
}
