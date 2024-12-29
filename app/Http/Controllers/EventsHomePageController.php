<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventName;
use App\Models\EventImage;

class EventsHomePageController extends Controller
{
    public function __invoke()
    {
        $events = EventName::with('eventImages')->inRandomOrder()->limit(5)->get();
        return view('home')->with('event', $events);
        //dd($events[0]->eventImages[0]->link);
    }
}
