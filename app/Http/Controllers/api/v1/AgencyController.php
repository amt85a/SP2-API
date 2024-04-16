<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAgencyRequest;
use App\Http\Requests\UpdateAgencyRequest;
use App\Models\Agency;
use App\Models\Booking;
use Illuminate\Support\Facades\Log;

class AgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agencies = Agency::all();

        $json = response()->json($agencies);

        Log::debug("The route /Agency has been accessed : AgencyController@index()");
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
    public function store(StoreAgencyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Agency $agency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agency $agency)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAgencyRequest $request, Agency $agency)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agency $agency)
    {
        //
    }
}
