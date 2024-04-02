<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSockRequest;
use App\Http\Requests\UpdateSockRequest;
use App\Models\Sock;

class SockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Sock::all();
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
        //
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
        //
    }
}
