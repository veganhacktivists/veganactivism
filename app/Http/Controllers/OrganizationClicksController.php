<?php

namespace App\Http\Controllers;

use App\Models\Organization;

class OrganizationClicksController extends Controller
{
    public function store(Organization $organization)
    {
        if ($organization->website()) {
            $organization->increaseClickCount();
        }
    }
}
