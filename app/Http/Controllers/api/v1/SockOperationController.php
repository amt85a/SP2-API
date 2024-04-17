<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSockOperationRequest;
use App\Http\Requests\UpdateSockOperationRequest;
use App\Models\SockOperation;
use Illuminate\Support\Facades\Log;

class SockOperationController extends Controller
{
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
    public function store(StoreSockOperationRequest $request)
    {
        $this->validate($request, [
            'sock_id' => 'required',
            'partner_id' => 'required',
            'operation_id' => 'required',
        ]);

        $sockOperation = SockOperation::create([
            'sock_id' => $request->sock_id,
            'partner_id' => $request->partner_id,
            'operation_id' => $request->operation_id
        ]);

        $json = response()->json($sockOperation, 201);
        //dd($json);

        Log::debug($json);

        return $json;
    }

    /**
     * Display the specified resource.
     */
    public function show(SockOperation $sockOperation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SockOperation $sockOperation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSockOperationRequest $request, SockOperation $sockOperation)
    {
        $this->validate($request, [
            'sock_id' => 'required',
            'partner_id' => 'required',
            'operation_id' => 'required',
        ]);

        $sockOperation->update([
            'sock_id' => $request->sock_id,
            'partner_id' => $request->partner_id,
            'operation_id' => $request->operation_id,
        ]);

        $json = response()->json($sockOperation, 201);

        Log::debug("The route /Booking has been accessed : SockOperationController@update()");
        Log::debug($json);

        return $json;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SockOperation $sockOperation)
    {
        //
    }
}
