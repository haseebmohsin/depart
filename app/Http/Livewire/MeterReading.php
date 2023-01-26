<?php

namespace App\Http\Livewire;

use App\Models\Fuel;
use Livewire\Component;
use Livewire\WithPagination;

class MeterReading extends Component
{
    use WithPagination;

    public function render()
    {
        $readings = Fuel::latest()->paginate(30);

        return view('livewire.meter-reading',[
            'readings' => $readings,
        ]);
    }
}
