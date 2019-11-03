<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Auth;

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

        \Redis::set('user_session:'.Auth::user()->id, json_encode(Auth::user()->toArray()));

        dd(\Redis::get('user_session:'.Auth::user()->id));
    }
}
