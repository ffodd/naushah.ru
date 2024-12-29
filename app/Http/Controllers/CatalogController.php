<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventName;
use App\Models\EventImage;
use App\Models\EventType;

class CatalogController extends Controller
{
    public function index()
    {
        $events = EventName::with('eventType')->with('eventImages')->find($id);
        return view('catalog')->with('event', $events);
    }
}
