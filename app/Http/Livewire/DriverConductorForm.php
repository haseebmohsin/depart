<?php

namespace App\Http\Livewire;

use App\Models\DriverConductor;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class DriverConductorForm extends Component
{
    use WithFileUploads;

    public $user_name;
    public $cnic;
    public $contact;
    public $address;
    public $occupation = 'driver';
    public $password;

    protected $rules = [
        'user_name' => 'required|string|max:125|unique:driver_conductors',
        'cnic' => 'required|numeric',
        'contact' => 'required|numeric',
        'address' => 'required|string|max:255',
        'password' => 'required|min:8|max:55',
    ];

    public function formSubmit()
    {
        $this->validate();

        if (DriverConductor::create([
            'user_name' => $this->user_name,
            'cnic' => $this->cnic,
            'contact' => $this->contact,
            'address' => $this->address,
            'occupation' => $this->occupation,
            'password' => Hash::make($this->occupation),
        ])) {
            return redirect()->route('driversConductors');
        }
    }

    public function render()
    {
        return view('livewire.driver-conductor-form')->layout('layouts.guest');
    }
}
