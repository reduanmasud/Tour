<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'destination' => ['required'],
        ]);

        $images = [];

        foreach ($request->images as $image) {
            $fileName = uniqid() . '.' . $image->getClientOriginalExtension();
            $image_path =  $image->storeAs('images', $fileName,'public');

            array_push($images, $image_path);
        }
        $data['images'] = $images;

        $user_id = Auth::id();
        Tour::create([
            'destination'=>$request->destination,
            'cost_per_person' => $request->cost_per_person,
            'seat_number' =>$request->seat_number,
            'images' => json_encode($images),
            'description' => $request->description,
            'user_id' =>$user_id,
        ]);

        return back()
            ->with('success',"Data Succussfully Added");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tour = Tour::find($id);
        return view('single',['tour' =>$tour]);
    }


    public function booking(Request $request)
    {


        $request->validate([
            'mobile' => ['required'],
            'full_name' => ['required'],
            'number_of_persons' => ['required'],
        ]);

        
        Booking::created($request);

        $tour = Tour::find($request->tour_id);

        $data = (object) [
            'number_of_persons'=>$request->number_of_persons,
            'cost_per_persons'=> $tour->cost_per_person,
            'sub_total' => $request->number_of_persons * $tour->cost_per_person,
            'counter_no' => $tour->id,
        ];
        return view('booking', ['data'=>$data]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function edit(Tour $tour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tour $tour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tour $tour)
    {
        //
    }
    
}
