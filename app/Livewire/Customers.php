<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;
use Log;
class Customers extends Component
{
  use WithPagination;
  protected $paginationTheme = 'bootstrap';
    // public $customers = [];
    public $search = '';
    // public function mount(){
    //   if(! $this->search){
    //     return  $this->customers = Customer::All();
    //   }else{
    //        $this->customers = Customer::where('name','like','%'.$this->search.'%')->get();
    //   }
    // }
    public function render()
    {
      if(! $this->search){
        $customers = Customer::paginate(10);
      }else{
        // Log::info($this->search);
           $customers = Customer::where('name','like','%'.$this->search.'%')->paginate(10);
      }
        return view('livewire.customers',get_defined_vars());
    }
    public function delete(Customer $customer){
      $customer->delete();
      return $this->redirect('/customers',navigate:true);
    }
}
