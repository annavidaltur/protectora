<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AnimalCard extends Component
{
    public $animal;
    
    public function render()
    {
        return view('livewire.animal-card');
    }
}
