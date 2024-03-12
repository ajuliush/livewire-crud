<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public function render()
    {
        return view('livewire.register');
    }
    public function register(){
        $validate = $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:8|max:255',
        ]);
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password)
        ]);
        Auth::login($user);
        return $this->redirect('/customers', navigate:true);

    }
}