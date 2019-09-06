<?php

namespace App\Http\Controllers;

use App\Repositories\OrganizationRepository;

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
    public function index(OrganizationRepository $repository)
    {
        $organizations = $repository->all();

        return view('home', compact('organizations'));
    }
}
