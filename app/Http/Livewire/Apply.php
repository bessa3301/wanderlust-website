<?php

namespace App\Http\Livewire;

use App\Models\Newsletter;
use Livewire\Component;

class Apply extends Component
{
    public $email;
    public function render()
    {
        return view('livewire.apply');
    }

    public function submitEmail()
    {
        // needs some validation
        Newsletter::create(['email' => $this->email]);
        return redirect(config('app.google-form-url'));
    }
}
