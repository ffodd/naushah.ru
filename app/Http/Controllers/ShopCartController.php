<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventName;
use App\Models\EventImage;

class ShopCartController extends Controller
{
    public function show(string $id)
    {
        $events = EventName::with('eventImages')->find($id);
        return view('shopcart')->with('event', $events);
    }
}
