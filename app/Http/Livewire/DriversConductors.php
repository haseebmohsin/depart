<?php

namespace App\Http\Livewire;

use App\Models\DriverConductor;
use Livewire\Component;
use Livewire\WithPagination;

class DriversConductors extends Component
{
    use WithPagination;
    public $searchQuery;
    protected $queryString = ['searchQuery'];
    protected $listeners = [
        'drivers' => 'drivers',
        'conductors' => 'conductors',
    ];

    public $travelersSidebar = false;
    public $driversSidebar = true;

    public $search = true;
    public $drivers = true;
    public $conductors = false;

    public function render()
    {
        if ($this->searchQuery) {
            $this->search = true;
        }

        if ($this->searchQuery && $this->search) {
            $searchQuery = '%' . $this->searchQuery . '%';
            $staffs = DriverConductor::where('user_name', 'like', $searchQuery)->paginate(20);
        } elseif ($this->drivers) {
            $staffs = DriverConductor::where('occupation', 'driver')->paginate(20);
        } elseif ($this->conductors) {
            $staffs = DriverConductor::where('occupation', 'conductor')->paginate(20);
        } else {
            $staffs = DriverConductor::where('occupation', 'driver')->paginate(20);
        }

        return view('livewire.drivers-conductors', [
            'staffs' => $staffs,
            'driversCount' => DriverConductor::where('occupation', 'driver')->count(),
            'conductorsCount' => DriverConductor::where('occupation', 'conductor')->count(),
        ]);
    }

    public function drivers()
    {
        $this->drivers = true;
        $this->conductors = false;
        $this->search = false;
    }
    public function conductors()
    {
        $this->conductors = true;
        $this->drivers = false;
        $this->search = false;
    }

    public function deleteStaff($id)
    {
        $staff = DriverConductor::where('id', $id)->first();
        if ($staff) {
            $staff->delete();
        }
    }
}
