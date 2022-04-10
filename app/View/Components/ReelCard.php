<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ReelCard extends Component
{
    public $mediaPath;
    public $message;
    public function __construct($mediaPath, $message)
    {
        $this->mediaPath = $mediaPath;
        $this->message = $message;
    }

    public function render()
    {
        return view('components.reel-card');
    }
}
