<?php

namespace App\Listeners;

use App\Events\OrgLinkClicked;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Request;

class IncementOrgLinkClicks
{
    /**
     * Handle the event.
     *
     * @param object $event
     */
    public function handle(OrgLinkClicked $event)
    {
        $orgsClicked = app('request')->session()->get('orgs_clicked', []);
        // dd($orgsClicked);
        if (!in_array($event->organization->id, $orgsClicked)) {
            $orgsClicked[] = $event->organization->id;
            app('request')->session()->put('orgs_clicked', $orgsClicked);
            // session()->put('orgs_clicked', json_encode($orgsClicked));
            $event->organization->website()->increment('click_count');
        }
    }
}
