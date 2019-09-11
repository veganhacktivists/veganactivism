<?php

namespace App\Http\Controllers;

class OrganizationsController extends Controller
{
    /**
     * Show the Organizations Page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($orgslug)
    {
        return view('details');
    }
}
