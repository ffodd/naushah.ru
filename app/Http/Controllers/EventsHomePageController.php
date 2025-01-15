<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventName;
use App\Models\EventImage;

class EventsHomePageController extends Controller
{
    public function __invoke()
    {
        $events = EventName::with('eventImages')->where('show_main', 1)->limit(3)->get();
        return view('home')->with('event', $events);
    }
}
