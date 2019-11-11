<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OrgHomeCard extends Component
{
    public $organization;

    public function mount($organization)
    {
        $this->organization = $organization;
    }

    public function render()
    {
        return view('livewire.org-home-card');
    }
}
