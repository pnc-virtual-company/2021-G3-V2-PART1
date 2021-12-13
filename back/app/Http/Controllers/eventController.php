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
        return Event::with(["category", "user","join"])->latest()->get();
    

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
            'image' =>'nullable|image|mimes:jpg,jpeg,png|max:4000',
            'start_date' => 'required|before:end_date',
            'end_date' => 'required|after:start_date'
        ]);


        $event = new Event();
        $event->user_id = $request->user_id;
        $event->category_id = $request->category_id;
        $event->title = $request->title;
        $event->description = $request->description;
        $event -> city = $request->city;
        $event->country = $request->country;
        $event->image = $request->image;
        if($request ->image !== null){
            $event->image = $request->file('image')->hashName();
            $request->file('image')->store('public/image');
        }else{
            $img = 'https://cdn1.iconfindeventser.com/data/icons/online-shopping-app-ui/48/photo_image_gallary-256.png';
            $event->image = $img;
        }
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
            'start_date' => 'required|before:end_date',
            'end_date' => 'required|after:start_date'
        ]);
     
        $event = Event::findOrFail($id);

        $event->user_id = $request->user_id;
        $event->category_id = $request->category_id;
        $event->title = $request->title;
        $event->description = $request->description;
        $event -> city = $request->city;
        $event->country = $request->country;
        $event->image = $request->image;
        
        if($request ->image !== null){
            $event->image = $request->file('image')->hashName();
            $request->file('image')->store('public/images/events');
        }else{
            $img = 'https://cdn1.iconfinder.com/data/icons/online-shopping-app-ui/48/photo_image_gallary-256.png';
            $event->image = $img;
        }

        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        

        $event->save();
        return response()->json(['Message' => 'Updated Event Succesfully', 'events', $event], 201);
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
        if($isDelete == 1) {
            return response()->json(['message' => 'Event deleted successfully'], 200);
        }
           
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
        return Event::where('title','like', '%'. $name . '%')->with('user','category','join')->get();
    }

    public function searchCity($city){

        return Event::where('city', 'like', '%'. $city . '%')->with('user','category','join')->get();
    }
 
    
  
}
