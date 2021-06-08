<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChallanView extends Component
{
    public function render()
    {
        return view('livewire.challan-view')->layout('layouts.guest');
    }
}
