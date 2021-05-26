<?php

namespace App\Http\Livewire;

use App\Models\RouteOne;
use App\Models\RouteThree;
use App\Models\RouteTwo;
use App\Models\Traveler;
use Livewire\Component;
use Livewire\WithFileUploads;
use PDF;

class Travelers extends Component
{
    use WithFileUploads;

    public $step;
    public $stopNames;

    public $shift = 'Morning';
    public $routeNo;
    public $selectedStop;
    public $challan;

    public $name = '';
    public $system_id = '';
    public $department = '';
    public $gender = 'Male';
    public $photo;

    private $stepActions = [
        'submit1',
        'submit2',
    ];

    public function mount()
    {
        $this->step = 0;

        $this->reset('stopNames');

        if ($this->routeNo === '1' && $this->shift === 'morning') {
            $this->stopNames = RouteOne::whereNotNull('m_stop')->distinct('m_stop')->pluck('m_stop');
        } elseif ($this->routeNo === '1' && $this->shift === 'evening') {
            $this->stopNames = RouteOne::whereNotNull('e_stop')->distinct('e_stop')->pluck('e_stop');
        }

        if ($this->routeNo === '2' && $this->shift === 'morning') {
            $this->stopNames = RouteTwo::whereNotNull('m_stop')->distinct('m_stop')->pluck('m_stop');
        } elseif ($this->routeNo === '2' && $this->shift === 'evening') {
            $this->stopNames = RouteTwo::whereNotNull('e_stop')->distinct('e_stop')->pluck('e_stop');
        }

        if ($this->routeNo === '3' && $this->shift === 'morning') {
            $this->stopNames = RouteThree::whereNotNull('m_stop')->distinct('m_stop')->pluck('m_stop');
        } elseif ($this->routeNo === '3' && $this->shift === 'evening') {
            $this->stopNames = RouteThree::whereNotNull('e_stop')->distinct('e_stop')->pluck('e_stop');
        }
    }

    public function updatedShift()
    {
        $this->mount();
    }

    public function updatedRouteNo()
    {
        $this->mount();
    }

    protected $rules = [
        'name' => 'required|string|max:125',
        'system_id' => 'required|unique:Travelers|string|max:255',
        'department' => 'required|string|max:255',
        'photo' => 'required|image|max:2048',
    ];

    public function decreaseStep()
    {
        $this->step--;
    }

    public function submit()
    {
        $action = $this->stepActions[$this->step];
        $this->$action();
    }


    public function submit1()
    {
        $this->validate([
            'challan' => 'required|image|max:2048',
            'routeNo' => 'required',
            'selectedStop' => 'required',
        ]);

        $this->step++;
    }

    public function submit2()
    {
        $this->validate();
        $challan_path = $this->challan->store('Challan', 'public');
        $photo_path = $this->photo->store('photos', 'public');

        Traveler::create([
            'shift' => $this->shift,
            'route_no' => $this->routeNo,
            'stop_name' => $this->selectedStop,
            'challan' => $challan_path,
            'name' => $this->name,
            'system_id' => $this->system_id,
            'department' => $this->department,
            'gender' => $this->gender,
            'photo' => $photo_path,
        ]);
        return redirect()->route('landing');
    }

    public function downloadChallan()
    {
        $pdf = PDF::loadView('components.challan-form');
        return $pdf->stream('Bus-Fee-Challan.pdf');
    }

    public function render()
    {
        return view('livewire.travelers')->layout('layouts.guest');
    }
}
