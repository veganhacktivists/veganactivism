<?php

namespace App\Http\Controllers;

use App\Events\OrgLinkClicked;
use App\Models\BackpackUser;
use App\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrganizationsController extends Controller
{
    /**
     * Show the Organizations Page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show(Organization $organization)
    {
        if ($organization->website()) {
            event(new OrgLinkClicked($organization, auth()->user() ?: null));
        }

        return view('organizations.show', compact('organization'));
    }

    /**
     * Return a list of organizations.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Support\Collection
     */
    public function index(Request $request)
    {
        $user = backpack_user();

        $search_term = $request->input('q');

        $results = DB::table('organizations');

        if (!$user->hasRole(BackpackUser::ROLE_SUPER_ADMIN)) {
            $results->join('organization_user', 'organization_id', '=', 'id')->where('user_id', $user->id);
        }

        if ($search_term) {
            $results->where('title', 'LIKE', '%'.$search_term.'%');
        }

        $results = $results->paginate(10);

        return $results;
    }

    /**
     * Return a specific organization.
     *
     * @param \App\Organization $organization
     *
     * @return \App\Organization
     */
    public function get(Organization $organization)
    {
        return $organization;
    }
}
