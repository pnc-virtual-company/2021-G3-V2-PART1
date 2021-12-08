<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
class eventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Event::latest()->get();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'min:1|max:100',
            'description' => 'min:1|max:200',
            'image' =>'nullable|image|mimes:jpg,jpeg,png|max:1999'
       

        ]);

        $request->file('image')->store("public/image");

        $event = new Event();
        $event->title = $request->title;
        $event->description = $request->description;
        $event->image = $request->file('image')->hashName();
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;

        $event->save();

        return response()->json(['Message' => 'Create Event Succesfully'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Event::findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'min:1|max:100',
            'description' => 'min:1|max:200',
            'image' =>'nullable|image|mimes:jpg,jpeg,png|max:1999',
            // 'stat_date' => '',
            // 'end_date' => ''

        ]);
        $event =  Event::findOrFail($id); 
        $event->title = $request->title;
        $event->description = $request->description;
        $event->image = $request->image;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;

        $event->save();
        return response()->json(['Message' => 'Update Event Succesfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $isDelete = Event::destroy($id);
        if($isDelete == 1) 
            return response()->json(['message' => 'Event deleted successfully'], 200);
        return response()->json(['message' => 'ID NOT EXIST'], 404);
    }
    /**
     * Search item name.
     *
     * @param  int  $name
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        return Event::where('title','like', '%'. $name . '%')->get();
    }
}
