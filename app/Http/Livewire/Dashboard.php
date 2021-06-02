<?php

namespace App\Http\Livewire;

use App\Models\Traveler;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class Dashboard extends Component
{
    use WithPagination;
    public $searchQuery;
    protected $queryString = ['searchQuery'];
    protected $listeners = [
        'newRequests' => 'newRequests',
        'allRecords' => 'allRecords',
        'allMales' => 'allMales',
        'allFemales' => 'allFemales',
    ];

    public $cardFront = false;
    public $cardBack = false;
    public $session = 'fall';
    public $serial = '363';
    public $name;
    public $photo;
    public $system_id;
    public $department;
    public $expiry = '12/04/2021';

    public $travelersSidebar = true;
    public $driversSidebar = false;

    public $search = true;
    public $newRequests = true;
    public $allRecords = false;
    public $allMales = false;
    public $allFemales = false;

    protected $qrCode;

    public function render()
    {
        if ($this->searchQuery) {
            $this->search = true;
        }

        if ($this->searchQuery && $this->search) {
            $searchQuery = '%' . $this->searchQuery . '%';
            $travelers = Traveler::where('name', 'like', $searchQuery)->latest()->paginate(30);
        } elseif ($this->newRequests) {
            $travelers = Traveler::where('is_printed', 0)->latest()->paginate(30);
        } elseif ($this->allRecords) {
            $travelers = Traveler::latest()->paginate(30);
        } elseif ($this->allMales) {
            $travelers = Traveler::where('gender', 'male')->latest()->paginate(30);
        } elseif ($this->allFemales) {
            $travelers = Traveler::where('gender', 'female')->latest()->paginate(30);
        } else {
            $travelers = Traveler::where('is_printed', 0)->latest()->paginate(30);
        }

        return view('livewire.dashboard', [
            'travelers' => $travelers,
            'qrCode' => $this->qrCode,
            'newRequestsCount' => Traveler::where('is_printed', 0)->count(),
            'allRecordsCount' => Traveler::count(),
            'allMalesCount' => Traveler::where('gender', 'male')->count(),
            'allFemalesCount' => Traveler::where('gender', 'female')->count(),
        ]);
    }

    public function newRequests()
    {
        $this->newRequests = true;
        $this->allRecords = false;
        $this->allMales = false;
        $this->allFemales = false;
        $this->search = false;
    }
    public function allRecords()
    {
        $this->allRecords = true;
        $this->newRequests = false;
        $this->allMales = false;
        $this->allFemales = false;
        $this->search = false;
    }
    public function allMales()
    {
        $this->allMales = true;
        $this->newRequests = false;
        $this->allRecords = false;
        $this->allFemales = false;
        $this->search = false;
    }
    public function allFemales()
    {
        $this->allFemales = true;
        $this->newRequests = false;
        $this->allRecords = false;
        $this->allMales = false;
        $this->search = false;
    }

    public function delete($id)
    {
        Traveler::find($id)->delete();
        session()->flash('deleteSuccess', "Deleted successfully");
    }

    public function updatePrintStatus($id)
    {
        $traveler = Traveler::find($id);
        if ($traveler) {
            $traveler->is_printed = 1;
            $traveler->save();
            session()->flash('printedStatus', "Removed from new Requests queue");
        }
    }

    public function printCardFront($id)
    {
        $this->cardBack = false;

        $traveler = Traveler::find($id);
        $this->name = $traveler->name;
        $this->photo = $traveler->photo;
        $this->system_id = $traveler->system_id;
        $this->department = $traveler->department;
        $this->cardFront = true;
    }

    public function printCardBack($id)
    {
        $this->cardFront = false;
        $this->cardBack = true;

        $traveler = Traveler::where('id', $id)->first();
        $dataArray = "
            Name: $traveler->name
            System Id: $traveler->system_id
            Department: $traveler->department
            Secret:_$traveler->secret
        ";

        $this->qrCode = QrCode::size(150)->color(45, 70, 130)->generate($dataArray);
    }
}
