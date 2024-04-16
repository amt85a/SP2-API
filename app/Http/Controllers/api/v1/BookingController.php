<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use App\Models\Booking;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = Booking::all();

        $json = response()->json($bookings);

        Log::debug("The route /Booking has been accessed : BookingController@index()");
        Log::debug($json);

        return $json;

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
    public function store(StoreBookingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookingRequest $request, Booking $booking)
    {
        $this->validate($request, [
            'reference' => 'required',
            'user_id' => 'required',
            'state_id' => 'required',
            'agency_id' => 'required',
        ]);
        /*$booking->reference = $request->reference;
        $booking->user_id = $request->user_id;
        $booking->state_id = $request->state_id;
        $booking->agency_id = $request->agency_id;
        $booking->update();*/

        $booking->update([
            'reference' => $request->reference,
            'user_id' => $request->user_id,
            'state_id' => $request->state_id,
            'agency_id' => $request->agency_id,
        ]);

        $json = response()->json($booking, 201);

        Log::debug("The route /Booking has been accessed : BookingController@update()");
        Log::debug($json);

        return $json;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }

    public function allWithoutAgency() {
        $bookings = Booking::all()->where('state_id','=',1);
        $json = response()->json($bookings);

        Log::debug("The route /Booking has been accessed : BookingController@allWithoutAgency()");
        Log::debug($json);

        return $json;
    }

    public function allWithAgencyState() {
        Log::debug("The route /Booking has been accessed : BookingController@allWithAgencyState()");
        return DB::select('call ps_bookings_agency_state();');
    }
}
