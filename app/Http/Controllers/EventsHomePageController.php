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
        $eventsSPb = $city->eventNames()->with('eventCity')->with('eventImages')->with('eventImages')->where('show_main', 1)->where('id_type', 1)->where('show_banner', 0)->inRandomOrder()->limit(5)->get();
        $eventsSPbGid = $city->eventNames()->with('eventCity')->with('eventImages')->where('show_main', 1)->where('id_type', 2)->where('show_banner', 0)->inRandomOrder()->limit(5)->get();

        $city = EventCity::find(2);
        $eventsPushGor = $city->eventNames()->with('eventCity')->with('eventImages')->where('show_main', 1)->where('show_banner', 0)->inRandomOrder()->limit(5)->get();

        //Получение событий для баннера
        $eventsBanner = EventName::with('eventCity')->with('eventImages')->where('show_banner', 1)->get();

        $events = [$eventsSPb, $eventsSPbGid, $eventsPushGor, $eventsBanner];

        return view('home')->with('event', $events);
    }
}
