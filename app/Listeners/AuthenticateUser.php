<?php

namespace App\Listeners;

use App\User;
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

        Redis::zadd('logged-in-users', 1, strval(Auth::user()->id));
    }
}
