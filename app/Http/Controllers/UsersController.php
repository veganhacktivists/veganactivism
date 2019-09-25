<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Return a list of users
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Support\Collection
     */
    public function index(UserRequest $request)
    {
        $search_term = $request->input('q');

        if ($search_term) {
            $results = User::where('name', 'LIKE', '%' . $search_term . '%')->paginate(10);
        } else {
            $results = User::paginate(10);
        }

        return $results;
    }

    /**
     * Return a specific user
     * 
     * @param \App\User $user
     * @return \App\User
     */
    public function get(User $user)
    {
        return $user;
    }
}
