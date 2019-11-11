<?php

namespace App\Listeners;

use App\Events\OrgLinkClicked;

class IncementOrgLinkClicks
{
    /**
     * Handle the event.
     *
     * @param object $event
     */
    public function handle(OrgLinkClicked $event)
    {
        if (!$event->user) {
            $event->organization->increment('click_count');
        }
    }
}
