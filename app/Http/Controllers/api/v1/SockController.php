<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSockRequest;
use App\Http\Requests\UpdateSockRequest;
use App\Models\Sock;
use Illuminate\Support\Facades\Log;

class SockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Sock::where('isInStock', '=', 1)->get();
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
    public function store(StoreSockRequest $request)
    {
        $this->validate($request, [
            'reference' => 'required',
            'amount' => 'required',
            'description' => 'required',
            'isInStock' => 'required',
            'booking_id' => 'nullable',
        ]);

        $sock = Sock::create([
            'reference' => $request->reference,
            'amount' => $request->amount,
            'description' => $request->description,
            'isInStock' => $request->isInStock,
            'booking_id' => $request->booking_id,
        ]);

        $json = response()->json($sock, 201);

        Log::debug($json);

        return $json;
    }

    /**
     * Display the specified resource.
     */
    public function show(Sock $sock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sock $sock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSockRequest $request, Sock $sock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sock $sock)
    {
        $sock->isInStock = false;
        $sock->save();

        $json = response()->json(1);
        Log::debug($json);
        return $json;
    }
}
