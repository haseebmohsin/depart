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
        'system_id' => 'required|unique:Travelers|string|max:255',
        'department' => 'required|string|max:255',
        'challan' => 'required|string|max:255',
        'photo' => 'required|image|max:2048',
    ];

    public function formSubmit()
    {
        $this->validate();

        $photo_path = $this->photo->store('photos','public');

        Traveler::create([
            'name' => $this->name,
            'photo' => $photo_path,
            'system_id' => $this->system_id,
            'department' => $this->department,
            'gender' => $this->gender,
            'challan' => $this->challan,
        ]);
        return redirect()->route('landing');
    }

    public function render()
    {
        return view('livewire.travelers')->layout('layouts.guest');
    }
}
