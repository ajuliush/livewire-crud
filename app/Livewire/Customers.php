<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class Customers extends Component
{
    public $customers = [];
    public function mount(){
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