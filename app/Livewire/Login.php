<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email;
    public $password;
    public $useSavedCredentials;
    public function updatedUseSavedCredentials()
    {
        if ($this->useSavedCredentials) {
            $this->email = 'qatudi@mailinator.com';
            $this->password = '123456789';
        }
    }
    public function render()
    {
        return view('livewire.login');
    }
    public function login(Request $request){
        $validate = $this->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|min:8|max:255',
        ]);
        if (Auth::attempt($validate)) {
            $request->session()->regenerate();
            return $this->redirect('\customers', navigate:true);
        }
        
   $this->addError('email','The password provided does not match the email address');
    }
}
