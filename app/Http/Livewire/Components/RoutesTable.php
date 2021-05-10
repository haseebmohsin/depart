<?php

namespace App\Http\Livewire\Components;

use App\Models\RouteOne;
use App\Models\RouteThree;
use App\Models\RouteTwo;
use Livewire\Component;
use Livewire\WithPagination;

class RoutesTable extends Component
{
    use WithPagination;

    public $routeNo;
    public $editMode = false;
    public $editModeId;

    public $m_stop;
    public $m_time;
    public $e_stop;
    public $e_time;

    public $model;

    public function editRoute($id)
    {
        $this->editModeId = $id;
        $this->editMode = true;
        $routes = $this->model->where('id', $id)->first();
        $this->m_stop = $routes->m_stop;
        $this->m_time = $routes->m_time;
        $this->e_stop = $routes->e_stop;
        $this->e_time = $routes->e_time;
    }

    public function updateRoute($id)
    {
        $routes = $this->model->where('id', $id)->first();
        $routes->m_stop = $this->m_stop;
        $routes->m_time = $this->m_time;
        $routes->e_stop = $this->e_stop;
        $routes->e_time = $this->e_time;
        $routes->save();
        $this->editMode = false;
        $this->emit('success');
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
        }
        return view('livewire.components.routes-table', [
            'routes' => $routes,
        ]);
    }
}
