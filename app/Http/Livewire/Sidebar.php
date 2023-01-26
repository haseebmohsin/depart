<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Sidebar extends Component
{
    public $newRequestsCount;
    public $allRecordsCount;
    public $allMalesCount;
    public $allFemalesCount;

    public $drivers;
    public $conductors;
    public $driversCount;
    public $conductorsCount;

    public $travelersSidebar;
    public $driversSidebar;

    public function render()
    {
        return view('livewire.sidebar', [
            'newRequestsCount' => $this->newRequestsCount,
            'totalRecordsCount' => $this->allRecordsCount,
            'allMalesCount' => $this->allMalesCount,
            'allFemalesCount' => $this->allFemalesCount,
            'driversCount' => $this->driversCount,
            'conductorsCount' => $this->conductorsCount,

            'travelersSidebar' => $this->travelersSidebar,
            'driversSidebar' => $this->driversSidebar,
        ]);
    }
}
