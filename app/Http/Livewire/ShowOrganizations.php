<?php

namespace App\Http\Livewire;

use App\Organization;
use Livewire\Component;

class ShowOrganizations extends Component
{
    private $posts;

    public function mount()
    {
        $this->posts = Organization::all();
    }

    public function render()
    {
        return view('livewire.show-organizations', ['posts' => $this->posts]);
    }

    public function sort($type)
    {
        switch ($type) {
            case 'DATE_ASC':
                $this->posts = $this->posts->orderBy('created_at', 'asc');
                break;
            case 'DATE_DESC':
                $this->posts = $this->posts->orderBy('created_at', 'desc');
                break;
        }
    }
}
