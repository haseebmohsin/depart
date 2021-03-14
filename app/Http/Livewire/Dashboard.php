<?php

namespace App\Http\Livewire;

use App\Models\Traveler;
use Illuminate\Support\Facades\Request;
use Livewire\Component;
use Livewire\WithPagination;

class Dashboard extends Component
{
    use WithPagination;
    public $searchQuery;
    protected $queryString = ['searchQuery'];
    
    public $travelersSidebar = true;
    public $driversSidebar = false;
    
    public $search = true;
    public $newRequests = true;
    public $allRecords = false;
    public $allMales = false;
    public $allFemales = false;

    public function render()
    {
        if($this->searchQuery){
            $this->search = true;
        }

        if($this->searchQuery && $this->search){
            $searchQuery = '%' . $this->searchQuery . '%';
            $travelers = Traveler::where('name', 'like', $searchQuery)->paginate(30);
        }elseif($this->newRequests){
            $travelers = Traveler::where('is_printed', 0)->paginate(30);
        }elseif($this->allRecords){
            $travelers = Traveler::paginate(30);
        }elseif($this->allMales){
            $travelers = Traveler::where('gender', 'male')->paginate(30);
        }elseif($this->allFemales){
            $travelers = Traveler::where('gender', 'female')->paginate(30);
        }else{
            $travelers = Traveler::where('is_printed', 0)->paginate(30);
        }

        return view('livewire.dashboard', [
            'travelers' => $travelers,
            'newRequestsCount' => Traveler::where('is_printed', 0)->count(),
            'allRecordsCount' => Traveler::count(),
            'allMalesCount' => Traveler::where('gender', 'male')->count(),
            'allFemalesCount' => Traveler::where('gender', 'female')->count(),
        ]);
    }

    public function newRequests(){
        $this->newRequests = true;
        $this->allRecords = false;
        $this->allMales = false;
        $this->allFemales = false;
        $this->search = false;
    }
    public function allRecords(){
        $this->allRecords = true;
        $this->newRequests = false;
        $this->allMales = false;
        $this->allFemales = false;
        $this->search = false;
    }
    public function allMales(){
        $this->allMales = true;
        $this->newRequests = false;
        $this->allRecords = false;
        $this->allFemales = false;
        $this->search = false;
    }
    public function allFemales(){
        $this->allFemales = true;
        $this->newRequests = false;
        $this->allRecords = false;
        $this->allMales = false;
        $this->search = false;
    }

    public function delete($id)
    {
        Traveler::find($id)->delete();
        session()->flash('deleteSuccess',"Traveler's data deleted successfully");
    }
    
    public function updatePrintStatus($id)
    {
        $traveler = Traveler::find($id);
        if( $traveler) 
        {
            $traveler->is_printed = 1;
            $traveler->save();
            session()->flash('printedStatus',"Traveler's data removed from new Requests queue");
        }
    }

}
