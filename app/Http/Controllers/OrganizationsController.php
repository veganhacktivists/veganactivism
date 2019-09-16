<?php

namespace App\Http\Controllers;

use App\Organization;

class OrganizationsController extends Controller
{
    /**
     * Show the Organizations Page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show(Organization $organization)
    {
        return view('organizations.show', compact('organization'));
    }
}
