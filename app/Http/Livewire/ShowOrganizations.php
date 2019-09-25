<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Organization;

class ShowOrganizations extends Component
{
    public $sort;
    public $organizations;

    public function mount()
    {
        $this->organizations = Organization::all()->toArray();
    }

    public function render()
    {
        return view('livewire.show-organizations');
    }

    public function updatedSort($value)
    {
        switch ($value) {
            case 'created_at':
                $this->organizations = Organization::orderBy('created_at', 'ASC')->get()->toArray();
                break;
            case 'created_at_older':
                $this->organizations = Organization::orderBy('created_at', 'DESC')->get()->toArray();
                break;
            case 'clicks':
                $this->organizations = collect($this->organizations)->sortBy('website_clicks')->values()->all();
                break;
            default:
                break;
       }
    }
}
