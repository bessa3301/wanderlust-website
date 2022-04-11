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

    protected $rules = [
        'email' => 'email|required'
    ];

    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function submitEmail()
    {
        $validated = $this->validate();
        Newsletter::create($validated);
        return redirect(config('app.google-form-url'));
    }
}
