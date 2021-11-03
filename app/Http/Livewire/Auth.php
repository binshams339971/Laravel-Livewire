<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Auth extends Component
{
    public $form = [
        'name'=> '',
        'email'=> '',
        'password'=> '',
        'confirm_password'=> '',

    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'form.name' => 'required|min:3',
            'form.email' => 'required|email',
            'form.password' => 'required|confirmed',

        ]);
    }
 
    public function submit()
    {
        $this->validate([
            'form.name' => 'required|min:3',
            'form.email' => 'required|email',
            'form.password' => 'required|confirmed',
        ]);
 
        
 
        
    }

    public function render()
    {
        return view('livewire.auth');
    }
}
