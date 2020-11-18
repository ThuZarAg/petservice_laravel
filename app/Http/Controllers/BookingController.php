<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Service_type;
use App\Package;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $bookings = Booking::all();
        return view('booking.index',compact('bookings'));
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
        //dd($request);

        // validation
        $request->validate([
            'ownername' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required',
            'address' => 'required',
            'petname' => 'required',
            'description' => 'required',
            'start_date' => 'required',
        ]);

        //dd($request);
        // data store
        $bookings = new Booking;
        $bookings->owner = $request->ownername;
        $bookings->email = $request->email;
        $bookings->phone = $request->phone;
        $bookings->address = $request->address;
        $bookings->petname = $request->petname;
        $bookings->description = $request->description;
        $bookings->servicetype_id = $request->service;
        $bookings->package_id = $request->package;
        $bookings->start_date = $request->start_date;
        
        $bookings->save();


        // redirect
        return redirect()->route('success'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        return view('booking.show',compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        return view('booking.edit',compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);

        // validation
        $request->validate([
            'ownername' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|string|email|max:255|unique:users',
            'phone' => 'sometimes|required',
            'address' => 'sometimes|required',
            'petname' => 'sometimes|required',
            'description' => 'sometimes|required',
            'start_date' => 'sometimes|required',
        ]);

        //dd($request);

        // update
        $bookings = Booking::find($id);
        $bookings->owner = $request->ownername;
        $bookings->email = $request->email;
        $bookings->phone = $request->phone;
        $bookings->address = $request->address;
        $bookings->petname = $request->petname;
        $bookings->description = $request->description;
        $bookings->servicetype_id = $request->service_type;
        $bookings->package_id = $request->package;
        $bookings->start_date = $request->start_date;
        
        $bookings->save();

        return redirect()->route('booking.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('booking.index');
    }

    
}
