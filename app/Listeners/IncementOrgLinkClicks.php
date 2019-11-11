<?php

namespace App\Listeners;

use App\Events\OrgLinkClicked;
use Illuminate\Support\Facades\Redis;

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
            $event->organization->website()->increment('click_count');

            return;
        }

        $redisSet = $event->user->redisOrgLinksSet();

        $orgRedisKey = strval($event->organization->id);

        $hasClickedOrg = Redis::command('sismember', [$redisSet, $orgRedisKey]);

        if (!$hasClickedOrg) {
            Redis::command('sadd', [$redisSet, $orgRedisKey]);

            $event->organization->website()->increment('click_count');
        }
    }
}
