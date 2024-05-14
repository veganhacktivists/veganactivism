<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Organization;

class ShowOrganizations extends Component
{
    public $sort;

    public $featuredOrganizations;

    public $regularOrganizations;

    public function mount()
    {
        $this->featuredOrganizations = Organization::featured()->get()->toArray();
        $this->regularOrganizations = $this->getFreshOrganizations()->toArray();
    }

    public function render()
    {
        return view('livewire.show-organizations');
    }

    public function setSort($value)
    {
        switch ($value) {
            case 'created_at':
                $this->regularOrganizations = Organization::orderBy('id', 'DESC')->get()->toArray();
                break;
            case 'created_at_older':
                $this->regularOrganizations = Organization::orderBy('id', 'ASC')->get()->toArray();
                break;
            case 'clicks':
                $this->regularOrganizations = collect($this->getFreshOrganizations())->sortByDesc('website_clicks')->values()->all();
                break;
            default:
                break;
       }
    }

    private function getFreshOrganizations()
    {
        return Organization::notFeatured()->get();
    }
}
