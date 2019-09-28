<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Idea;

class ShowMicroactivsm extends Component
{
    public function render()
    {
        return view('livewire.show-microactivsm', [
            'ideas' => Idea::all(),
        ]);
    }
}
