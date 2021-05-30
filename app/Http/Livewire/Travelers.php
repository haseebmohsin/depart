<?php

namespace App\Http\Livewire;

use App\Models\RouteEight;
use App\Models\RouteEighteen;
use App\Models\RouteEleven;
use App\Models\RouteFifteen;
use App\Models\RouteFive;
use App\Models\RouteFour;
use App\Models\RouteFourteen;
use App\Models\RouteNine;
use App\Models\RouteNineteen;
use App\Models\RouteOne;
use App\Models\RouteSeven;
use App\Models\RouteSeventeen;
use App\Models\RouteSix;
use App\Models\RouteSixteen;
use App\Models\RouteTen;
use App\Models\RouteThirteen;
use App\Models\RouteThree;
use App\Models\RouteTwelve;
use App\Models\RouteTwenty;
use App\Models\RouteTwentyFive;
use App\Models\RouteTwentyFour;
use App\Models\RouteTwentyOne;
use App\Models\RouteTwentySix;
use App\Models\RouteTwentyThree;
use App\Models\RouteTwentyTwo;
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
            $this->stopNames = RouteOne::whereNotNull('morning_stop')->pluck('morning_stop');
        } elseif ($this->routeNo === '1' && $this->shift === 'evening') {
            $this->stopNames = RouteOne::whereNotNull('evening_stop')->pluck('evening_stop');
        }

        if ($this->routeNo === '2' && $this->shift === 'morning') {
            $this->stopNames = RouteTwo::whereNotNull('morning_stop')->pluck('morning_stop');
        } elseif ($this->routeNo === '2' && $this->shift === 'evening') {
            $this->stopNames = RouteTwo::whereNotNull('evening_stop')->pluck('evening_stop');
        }

        if ($this->routeNo === '3' && $this->shift === 'morning') {
            $this->stopNames = RouteThree::whereNotNull('morning_stop')->pluck('morning_stop');
        } elseif ($this->routeNo === '3' && $this->shift === 'evening') {
            $this->stopNames = RouteThree::whereNotNull('evening_stop')->pluck('evening_stop');
        }

        if ($this->routeNo === '4' && $this->shift === 'morning') {
            $this->stopNames = RouteFour::whereNotNull('morning_stop')->pluck('morning_stop');
        } elseif ($this->routeNo === '4' && $this->shift === 'evening') {
            $this->stopNames = RouteFour::whereNotNull('evening_stop')->pluck('evening_stop');
        }

        if ($this->routeNo === '5' && $this->shift === 'morning') {
            $this->stopNames = RouteFive::whereNotNull('morning_stop')->pluck('morning_stop');
        } elseif ($this->routeNo === '5' && $this->shift === 'evening') {
            $this->stopNames = RouteFive::whereNotNull('evening_stop')->pluck('evening_stop');
        }

        if ($this->routeNo === '6' && $this->shift === 'morning') {
            $this->stopNames = RouteSix::whereNotNull('morning_stop')->pluck('morning_stop');
        } elseif ($this->routeNo === '6' && $this->shift === 'evening') {
            $this->stopNames = RouteSix::whereNotNull('evening_stop')->pluck('evening_stop');
        }

        if ($this->routeNo === '7' && $this->shift === 'morning') {
            $this->stopNames = RouteSeven::whereNotNull('morning_stop')->pluck('morning_stop');
        } elseif ($this->routeNo === '7' && $this->shift === 'evening') {
            $this->stopNames = RouteSeven::whereNotNull('evening_stop')->pluck('evening_stop');
        }

        if ($this->routeNo === '8' && $this->shift === 'morning') {
            $this->stopNames = RouteEight::whereNotNull('morning_stop')->pluck('morning_stop');
        } elseif ($this->routeNo === '8' && $this->shift === 'evening') {
            $this->stopNames = RouteEight::whereNotNull('evening_stop')->pluck('evening_stop');
        }

        if ($this->routeNo === '9' && $this->shift === 'morning') {
            $this->stopNames = RouteNine::whereNotNull('morning_stop')->pluck('morning_stop');
        } elseif ($this->routeNo === '9' && $this->shift === 'evening') {
            $this->stopNames = RouteNine::whereNotNull('evening_stop')->pluck('evening_stop');
        }

        if ($this->routeNo === '10' && $this->shift === 'morning') {
            $this->stopNames = RouteTen::whereNotNull('morning_stop')->pluck('morning_stop');
        } elseif ($this->routeNo === '10' && $this->shift === 'evening') {
            $this->stopNames = RouteTen::whereNotNull('evening_stop')->pluck('evening_stop');
        }

        if ($this->routeNo === '11' && $this->shift === 'morning') {
            $this->stopNames = RouteEleven::whereNotNull('morning_stop')->pluck('morning_stop');
        } elseif ($this->routeNo === '11' && $this->shift === 'evening') {
            $this->stopNames = RouteEleven::whereNotNull('evening_stop')->pluck('evening_stop');
        }

        if ($this->routeNo === '12' && $this->shift === 'morning') {
            $this->stopNames = RouteTwelve::whereNotNull('morning_stop')->pluck('morning_stop');
        } elseif ($this->routeNo === '12' && $this->shift === 'evening') {
            $this->stopNames = RouteTwelve::whereNotNull('evening_stop')->pluck('evening_stop');
        }

        if ($this->routeNo === '13' && $this->shift === 'morning') {
            $this->stopNames = RouteThirteen::whereNotNull('morning_stop')->pluck('morning_stop');
        } elseif ($this->routeNo === '13' && $this->shift === 'evening') {
            $this->stopNames = RouteThirteen::whereNotNull('evening_stop')->pluck('evening_stop');
        }

        if ($this->routeNo === '14' && $this->shift === 'morning') {
            $this->stopNames = RouteFourteen::whereNotNull('morning_stop')->pluck('morning_stop');
        } elseif ($this->routeNo === '14' && $this->shift === 'evening') {
            $this->stopNames = RouteFourteen::whereNotNull('evening_stop')->pluck('evening_stop');
        }

        if ($this->routeNo === '15' && $this->shift === 'morning') {
            $this->stopNames = RouteFifteen::whereNotNull('morning_stop')->pluck('morning_stop');
        } elseif ($this->routeNo === '15' && $this->shift === 'evening') {
            $this->stopNames = RouteFifteen::whereNotNull('evening_stop')->pluck('evening_stop');
        }

        if ($this->routeNo === '16' && $this->shift === 'morning') {
            $this->stopNames = RouteSixteen::whereNotNull('morning_stop')->pluck('morning_stop');
        } elseif ($this->routeNo === '16' && $this->shift === 'evening') {
            $this->stopNames = RouteSixteen::whereNotNull('evening_stop')->pluck('evening_stop');
        }

        if ($this->routeNo === '17' && $this->shift === 'morning') {
            $this->stopNames = RouteSeventeen::whereNotNull('morning_stop')->pluck('morning_stop');
        } elseif ($this->routeNo === '17' && $this->shift === 'evening') {
            $this->stopNames = RouteSeventeen::whereNotNull('evening_stop')->pluck('evening_stop');
        }

        if ($this->routeNo === '18' && $this->shift === 'morning') {
            $this->stopNames = RouteEighteen::whereNotNull('morning_stop')->pluck('morning_stop');
        } elseif ($this->routeNo === '18' && $this->shift === 'evening') {
            $this->stopNames = RouteEighteen::whereNotNull('evening_stop')->pluck('evening_stop');
        }

        if ($this->routeNo === '19' && $this->shift === 'morning') {
            $this->stopNames = RouteNineteen::whereNotNull('morning_stop')->pluck('morning_stop');
        } elseif ($this->routeNo === '19' && $this->shift === 'evening') {
            $this->stopNames = RouteNineteen::whereNotNull('evening_stop')->pluck('evening_stop');
        }

        if ($this->routeNo === '20' && $this->shift === 'morning') {
            $this->stopNames = RouteTwenty::whereNotNull('morning_stop')->pluck('morning_stop');
        } elseif ($this->routeNo === '20' && $this->shift === 'evening') {
            $this->stopNames = RouteTwenty::whereNotNull('evening_stop')->pluck('evening_stop');
        }

        if ($this->routeNo === '21' && $this->shift === 'morning') {
            $this->stopNames = RouteTwentyOne::whereNotNull('morning_stop')->pluck('morning_stop');
        } elseif ($this->routeNo === '21' && $this->shift === 'evening') {
            $this->stopNames = RouteTwentyOne::whereNotNull('evening_stop')->pluck('evening_stop');
        }

        if ($this->routeNo === '22' && $this->shift === 'morning') {
            $this->stopNames = RouteTwentyTwo::whereNotNull('morning_stop')->pluck('morning_stop');
        } elseif ($this->routeNo === '22' && $this->shift === 'evening') {
            $this->stopNames = RouteTwentyTwo::whereNotNull('evening_stop')->pluck('evening_stop');
        }

        if ($this->routeNo === '23' && $this->shift === 'morning') {
            $this->stopNames = RouteTwentyThree::whereNotNull('morning_stop')->pluck('morning_stop');
        } elseif ($this->routeNo === '23' && $this->shift === 'evening') {
            $this->stopNames = RouteTwentyThree::whereNotNull('evening_stop')->pluck('evening_stop');
        }

        if ($this->routeNo === '24' && $this->shift === 'morning') {
            $this->stopNames = RouteTwentyFour::whereNotNull('morning_stop')->pluck('morning_stop');
        } elseif ($this->routeNo === '24' && $this->shift === 'evening') {
            $this->stopNames = RouteTwentyFour::whereNotNull('evening_stop')->pluck('evening_stop');
        }

        if ($this->routeNo === '25' && $this->shift === 'morning') {
            $this->stopNames = RouteTwentyFive::whereNotNull('morning_stop')->pluck('morning_stop');
        } elseif ($this->routeNo === '25' && $this->shift === 'evening') {
            $this->stopNames = RouteTwentyFive::whereNotNull('evening_stop')->pluck('evening_stop');
        }

        if ($this->routeNo === '26' && $this->shift === 'morning') {
            $this->stopNames = RouteTwentySix::whereNotNull('morning_stop')->pluck('morning_stop');
        } elseif ($this->routeNo === '26' && $this->shift === 'evening') {
            $this->stopNames = RouteTwentySix::whereNotNull('evening_stop')->pluck('evening_stop');
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
