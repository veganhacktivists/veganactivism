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
                $this->organizations = collect($this->organizations)->sortByDesc('id', SORT_REGULAR, true)->values()->all();
                break;
            case 'created_at_older':
                $this->organizations = collect($this->organizations)->sortBy('id', SORT_REGULAR, true)->values()->all();
                break;
            case 'clicks':
                $this->organizations = collect($this->organizations)->sortBy('website_clicks', SORT_REGULAR, true)->values()->all();
                break;
            default:
                break;
       }
    }
}
