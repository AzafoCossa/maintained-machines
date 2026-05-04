<?php

use App\Livewire\Forms\AuthForm;
use Livewire\Component;

new class extends Component
{
    public AuthForm $authForm;

    public function login()
    {
        if($this->authForm->login())
        {
            return redirect()->intended(route('home')); 
        }
    }
};