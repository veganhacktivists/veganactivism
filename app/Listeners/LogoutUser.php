<?php

namespace App\Listeners;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class LogoutUser
{
    /*
     * This is a bit of a hack, but it works. Without a lock,
     * logging out turns into infinite recursion.
     */
    private static $lock = false;

    /**
     * Create the event listener.
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param object $event
     */
    public function handle($event)
    {
        if (self::$lock) {
            return;
        }
        self::$lock = true;

        if (backpack_user()) {
            backpack_auth()->logout();
        }

        if (Auth::check()) {
            $userClicksSet = Auth::user()->redisOrgLinksSet();

            $orgIdsClicked = Redis::command('smembers', [$userClicksSet]);

//            dd($orgIdsClicked);

            foreach ($orgIdsClicked as $orgId) {
                Redis::command('srem', [$userClicksSet, $orgId]);
            }

            Auth::logout();
        }
    }
}
