<?php

namespace App\Http\Controllers;

use App\Organization;
use Illuminate\Http\Request;

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

    /**
     * Return a list of organizations
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Support\Collection
     */
    public function index(Request $request)
    {
        $search_term = $request->input('q');

        if ($search_term) {
            $results = Organization::where('title', 'LIKE', '%' . $search_term . '%')->paginate(10);
        } else {
            $results = Organization::paginate(10);
        }

        return $results;
    }

    /**
     * Return a specific organization
     * 
     * @param \App\Organization $organization
     * @return \App\Organization
     */
    public function get(Organization $organization)
    {
        return $organization;
    }
}
