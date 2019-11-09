<?php

namespace App\Http\Livewire;

use App\Organization;
use Livewire\Component;

class OrgHomeCard extends Component
{
    public $organization;

    public function mount(Organization $organization)
    {
        $this->organization = $organization;
    }

    public function render()
    {
        return view('livewire.org-home-card');
    }
}
