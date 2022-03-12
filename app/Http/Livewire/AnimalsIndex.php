<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Animal;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
 
class AnimalsIndex extends Component
{
    use WithPagination;
    public $search;

    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {
        $animals = Animal::where('name', 'like', '%' . $this->search . '%')
            ->latest('id')
            ->paginate(8);

        return view('livewire.animals-index', compact('animals'));
    }
}
