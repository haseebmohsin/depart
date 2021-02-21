<?php

namespace App\Http\Livewire;

use App\Models\DriverConductor;
use Livewire\Component;
use Livewire\WithFileUploads;

class DriverConductorForm extends Component
{
    use WithFileUploads;

    public $name = '';
    public $CNIC = '';
    public $contact = '';
    public $address = '';
    public $occupation = '';

    protected $rules = [
        'name' => 'required|string|max:255',
        'CNIC' => 'required|string|max:255',
        'contact' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'occupation' => 'required',
    ];

    public function formSubmit()
    {
        $this->validate();

        if (DriverConductor::create([
            'name' => $this->name,
            'CNIC' => $this->CNIC,
            'contact' => $this->contact,
            'address' => $this->address,
            'occupation' => $this->occupation,
        ])) {
            return redirect()->route('driversConductors');
        }
    }

    public function render()
    {
        return view('livewire.driver-conductor-form')->layout('layouts.guest');
    }

}
