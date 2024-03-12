<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;
use Auth;
class Customers extends Component
{
    public $customers = [];
    public function mount(){
      dd(Auth::user()->name);
      return  $this->customers = Customer::All();
    }
    public function render()
    {
        return view('livewire.customers');
    }
    public function delete(Customer $customer){
      $customer->delete();
      return $this->redirect('/customers',navigate:true);
    }
}