<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventName;
use App\Models\EventImage;
use App\Models\EventType;

class EventController extends Controller
{
    //Отобразить все события (админка)
    public function indexBack()
    {
        $events = EventName::get();
        return view('dashboard.indexEvent')->with('events', $events);     
    }
    //Отобразить форму редактирования события (админка)
    public function editBack(string $id)
    {
        $event = EventName::find($id);
        return view('dashboard.editEvent')->with('event', $event);
    }
    //Обновить событие (админка)
    public function updateBack(Request $request)
    {
        $post = EventName::find($request->input('id'));
        $post->update([
            'name' => $request->input('name'),
            'price' => $request->input('price'),  
            'duration' => $request->input('duration'), 
            'length' => $request->input('length'), 
            'availability_time' => $request->input('availability_time'),   
            'starting_point' => $request->input('starting_point'),  
            'finish_point' => $request->input('finish_point'),            
            'desc' => $request->input('content'),
        ]);
        return redirect()->route('eventsBack.index');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $events = EventName::with('eventType')->with('eventImages')->find($id);
        return view('eventInfo')->with('event', $events);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
