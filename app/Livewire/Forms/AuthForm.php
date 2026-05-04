<?php

namespace App\Livewire\Forms;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
use Livewire\Form;

class AuthForm extends Form
{
    public ?string $email = null;
    public ?string $password = null;
    public ?bool $remember_me = null;

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if(Auth::attempt($credentials, $this->remember_me)){
            return true;
        }else{
            throw ValidationException::withMessages(
                ['invalid_credentials' => 'As credenciais fornecidas sao invalidas!'],
            );
        }
    }
}
