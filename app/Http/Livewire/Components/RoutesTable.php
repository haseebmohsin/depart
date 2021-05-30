<?php

namespace App\Http\Livewire\Components;

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
use Livewire\Component;
use Livewire\WithPagination;

class RoutesTable extends Component
{
    use WithPagination;

    public $routeNo;
    public $editMode = false;
    public $editModeId;

    public $addNewStopFields = false;

    public $morning_stop;
    public $morning_time;
    public $evening_stop;
    public $evening_time;

    public $model;

    public function resetProperties()
    {
        $this->reset('morning_stop');
        $this->reset('morning_time');
        $this->reset('evening_stop');
        $this->reset('evening_time');
    }

    public function addNewStop()
    {
        $this->resetProperties();
        $this->editMode = false;
        $this->addNewStopFields = true;
    }

    public function saveNewStop()
    {
        $this->model->create([
            'morning_stop' => $this->morning_stop,
            'morning_time' => $this->morning_time,
            'evening_stop' => $this->evening_stop,
            'evening_time' => $this->evening_time,
        ]);

        $this->addNewStopFields = false;
    }

    public function editRoute($id)
    {
        $this->addNewStopFields = false;
        $this->editMode = true;
        $this->editModeId = $id;
        $routes = $this->model->where('id', $id)->first();
        $this->morning_stop = $routes->morning_stop;
        $this->morning_time = $routes->morning_time;
        $this->evening_stop = $routes->evening_stop;
        $this->evening_time = $routes->evening_time;
    }

    public function updateRoute($id)
    {
        $routes = $this->model->where('id', $id)->first();
        $routes->morning_stop = $this->morning_stop;
        $routes->morning_time = $this->morning_time;
        $routes->evening_stop = $this->evening_stop;
        $routes->evening_time = $this->evening_time;
        $routes->save();
        $this->editMode = false;
        $this->emit('success');
    }

    public function DeleteStop($id)
    {
        $this->model->where('id', $id)->delete();
    }

    public function render()
    {
        if ($this->routeNo === 1) {
            $routes = RouteOne::paginate(30);
            $this->model = new RouteOne();
        } elseif ($this->routeNo === 2) {
            $routes = RouteTwo::paginate(30);
            $this->model = new RouteTwo();
        } elseif ($this->routeNo === 3) {
            $routes = RouteThree::paginate(30);
            $this->model = new RouteThree();
        } elseif ($this->routeNo === 4) {
            $routes = RouteFour::paginate(30);
            $this->model = new RouteFour();
        } elseif ($this->routeNo === 5) {
            $routes = RouteFive::paginate(30);
            $this->model = new RouteFive();
        } elseif ($this->routeNo === 6) {
            $routes = RouteSix::paginate(30);
            $this->model = new RouteSix();
        } elseif ($this->routeNo === 7) {
            $routes = RouteSeven::paginate(30);
            $this->model = new RouteSeven();
        } elseif ($this->routeNo === 8) {
            $routes = RouteEight::paginate(30);
            $this->model = new RouteEight();
        } elseif ($this->routeNo === 9) {
            $routes = RouteNine::paginate(30);
            $this->model = new RouteNine();
        } elseif ($this->routeNo === 10) {
            $routes = RouteTen::paginate(30);
            $this->model = new RouteTen();
        } elseif ($this->routeNo === 11) {
            $routes = RouteEleven::paginate(30);
            $this->model = new RouteEleven();
        } elseif ($this->routeNo === 12) {
            $routes = RouteTwelve::paginate(30);
            $this->model = new RouteTwelve();
        } elseif ($this->routeNo === 13) {
            $routes = RouteThirteen::paginate(30);
            $this->model = new RouteThirteen();
        } elseif ($this->routeNo === 14) {
            $routes = RouteFourteen::paginate(30);
            $this->model = new RouteFourteen();
        } elseif ($this->routeNo === 15) {
            $routes = RouteFifteen::paginate(30);
            $this->model = new RouteFifteen();
        } elseif ($this->routeNo === 16) {
            $routes = RouteSixteen::paginate(30);
            $this->model = new RouteSixteen();
        } elseif ($this->routeNo === 17) {
            $routes = RouteSeventeen::paginate(30);
            $this->model = new RouteSeventeen();
        } elseif ($this->routeNo === 18) {
            $routes = RouteEighteen::paginate(30);
            $this->model = new RouteEighteen();
        } elseif ($this->routeNo === 19) {
            $routes = RouteNineteen::paginate(30);
            $this->model = new RouteNineteen();
        } elseif ($this->routeNo === 20) {
            $routes = RouteTwenty::paginate(30);
            $this->model = new RouteTwenty();
        } elseif ($this->routeNo === 21) {
            $routes = RouteTwentyOne::paginate(30);
            $this->model = new RouteTwentyOne();
        } elseif ($this->routeNo === 22) {
            $routes = RouteTwentyTwo::paginate(30);
            $this->model = new RouteTwentyTwo();
        } elseif ($this->routeNo === 23) {
            $routes = RouteTwentyThree::paginate(30);
            $this->model = new RouteTwentyThree();
        } elseif ($this->routeNo === 24) {
            $routes = RouteTwentyFour::paginate(30);
            $this->model = new RouteTwentyFour();
        } elseif ($this->routeNo === 25) {
            $routes = RouteTwentyFive::paginate(30);
            $this->model = new RouteTwentyFive();
        } elseif ($this->routeNo === 26) {
            $routes = RouteTwentySix::paginate(30);
            $this->model = new RouteTwentySix();
        }

        return view('livewire.components.routes-table', [
            'routes' => $routes,
        ]);
    }
}
