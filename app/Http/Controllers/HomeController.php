<?php

namespace App\Http\Controllers;

use App\Organization;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $organizations = Organization::all();

        return view('home', compact('organizations'));
    }
}
