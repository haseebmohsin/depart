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

    protected $rules = [
        'name' => 'required|string|max:255',
        'CNIC' => 'required|string|max:255',
        'contact' => 'required|string|max:255',
        'address' => 'required|string|max:255',
    ];

    public function formSubmit()
    {
        $this->validate();

        if (DriverConductor::create([
            'name' => $this->name,
            'CNIC' => $this->CNIC,
            'contact' => $this->contact,
            'address' => $this->address,
        ])) {
            return redirect()->route('dashboard');
        }
    }

    public function render()
    {
        return view('livewire.driver-conductor-form');
    }

}
