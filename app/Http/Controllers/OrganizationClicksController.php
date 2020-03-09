<?php

namespace App\Http\Controllers;

use App\Events\OrgLinkClicked;
use App\Organization;

class OrganizationClicksController extends Controller
{
    public function store(Organization $organization)
    {
        if ($organization->website()) {
            event(new OrgLinkClicked($organization, auth()->user() ?: null));
        }
    }
}
