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
        $this->organizations = $this->getFreshOrganizations()->toArray();
    }

    public function render()
    {
        return view('livewire.show-organizations');
    }

    public function setSort($value)
    {
        switch ($value) {
            case 'created_at':
                $this->organizations = collect($this->getFreshOrganizations())->sortBy('id')->values()->all();
                break;
            case 'created_at_older':
                $this->organizations = collect($this->getFreshOrganizations())->sortByDesc('id')->values()->all();
                break;
            case 'clicks':
                $this->organizations = collect($this->getFreshOrganizations())->sortByDesc('website_clicks')->values()->all();
                break;
            default:
                break;
       }
    }

    private function getFreshOrganizations()
    {
        return Organization::all();
    }
}
