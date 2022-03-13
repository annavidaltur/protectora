<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Animal;
use App\Models\Specie;

class AnimalsIndexList extends Component
{
    use WithPagination;
    public $search;
    public $sort = "id";
    public $direction = "desc";
    public $specie_id = 1;

    
    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {   
        $species = Specie::all();

        $animals = Animal::where('name', 'like', '%' . $this->search . '%')
            // ->latest('id') 
            // ->where('specie_id', '=', $this->filter)           
            ->where('specie_id', $this->specie_id)
            ->orderBy($this->sort, $this->direction)
            ->paginate(8);

        return view('livewire.animals-index-list', compact('animals', 'species'));
    }

    public function order($sort, $direction){
        $this->sort = $sort;
        $this->direction = $direction;
    }

    public function filter($specie_id){
        $this->specie_id = $specie_id;
    }
}
