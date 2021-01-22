<?php

namespace App\Http\Livewire;

use App\Models\Traveler;
use Livewire\Component;
use Livewire\WithFileUploads;

class Travelers extends Component
{
    use WithFileUploads;

    public $name = '';
    public $photo;
    public $system_id = '';
    public $department = '';
    public $gender = '';
    public $challan = '';

    protected $rules = [
        'name' => 'required|string|max:255',
        'system_id' => 'required|string|max:255',
        'department' => 'required|string|max:255',
        'challan' => 'required|string|max:255',
    ];

    public function updatedPhoto(){
        $this->validate([
            'photo' => 'required|image|max:1024',
        ]);
    }

    public function formSubmit()
    {
        $this->validate();

        $this->photo->store('photos');

        if (Traveler::create([
            'name' => $this->name,
            'photo' => $this->photo,
            'system_id' => $this->system_id,
            'department' => $this->department,
            'gender' => $this->gender,
            'challan' => $this->challan,
            'status' => "approved",
        ])) {
            return redirect()->route('landing');
        }
    }

    public function render()
    {
        return view('livewire.travelers');
    }
}
