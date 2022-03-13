<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Animal;
use App\Models\Specie;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
 
class AnimalsIndex extends Component
{
    use WithPagination;
    public $search;
    public $sort = "birth";
    public $direction = "desc";
    // public $filter = array(1, 2);

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {   
        $species = Specie::all();

        $animals = Animal::where('name', 'like', '%' . $this->search . '%')
            // ->latest('id') 
            // ->where('specie_id', '=', $this->filter)           
            ->orderBy($this->sort, $this->direction)
            ->paginate(8);

        return view('livewire.animals-index', compact('animals', 'species'));
    }

    public function birth($direction){
        $this->direction = $direction;
    }

    // public function filter($specie_id){
    //     $this->filter = $specie_id;
    // }
}
