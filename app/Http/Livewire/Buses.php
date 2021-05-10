<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Buses extends Component
{
    protected $listeners = ['success'];

    public function success()
    {
        session()->flash('success', "Edit is made successful");
    }

    public function render()
    {
        return view('livewire.buses');
    }
}
