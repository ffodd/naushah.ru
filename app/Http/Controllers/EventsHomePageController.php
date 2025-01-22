<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventName;
use App\Models\EventImage;
use App\Models\EventCity;

class EventsHomePageController extends Controller
{
    public function __invoke()
    {
        $city = EventCity::find(1);
        $eventsSPb = $city->eventNames()->with('eventImages')->where('show_main', 1)->limit(5)->get();

        $city = EventCity::find(2);
        $eventsPushGor = $city->eventNames()->with('eventImages')->where('show_main', 1)->limit(3)->get();
        $events = [$eventsSPb, $eventsPushGor];
        return view('home')->with('event', $events);
    }
}
