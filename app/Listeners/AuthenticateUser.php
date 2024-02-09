<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class AuthenticateUser
{
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
        if (!backpack_user()) {
            backpack_auth()->login($event->user, $event->user->remmeber);
        }

        if (!Auth::check()) {
            Auth::login($event->user, $event->user->remmeber);
        }

        /** @var App\Models\User $user */
        $user = Auth::user();

        /*
         * Create a redis set with the user's
         * id as the key and org ids as the
         * unique values. Just use 0 as
         * the only org id at the start
         */
        Redis::command('sadd', [$user->redisOrgLinksSet(), 0]);
    }
}
