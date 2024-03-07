<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateCustomer extends Component
{
    use WithFileUploads;
    public $name = '';
    public $email = '';
    public $phone = '';
    public $image = '';
    public function render()
    {
        return view('livewire.create-customer');
    }
    public function store(){
        $data = $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:customers|max:255',
            'phone' => 'required|unique:customers|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
             // Save the image to storage if it's provided
             if ($this->image) {
                $data['image'] = $this->image->store('images', 'public');
            }
        Customer::create($data);
        $this->reset();
    }
}
