<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    /**
     * Redirects User to a specific website.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($to, Request $request)
    {
        $location = $request->input('location');
        $secure_location = substr($location, 0, 30);

        switch ($to) {
            case 'facebook':
                return redirect('https://www.facebook.com/search/groups/?q=Vegan%20'.$secure_location);
                break;
            case 'meetup':
                return redirect('https://www.meetup.com/find/?allMeetups=false&keywords=Vegan&radius=5&userFreeform='.$secure_location);
                break;
            default:
                break;
        }

        return view('home');
    }

    /**
     * Redirects User to Vegan Hacktavists contact page.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function contact()
    {
        return redirect()->away('https://veganhacktivists.org/contact?veganactivism');
    }
}
