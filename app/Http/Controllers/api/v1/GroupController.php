<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGroupRequest;
use App\Http\Requests\UpdateGroupRequest;
use App\Models\Group;
use Illuminate\Support\Facades\Log;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups = Group::all();

        $json = response()->json($groups);

        Log::debug("The route /Group has been accessed : GroupController@index()");
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
    public function store(StoreGroupRequest $request)
    {
        $this->validate($request, [
            'reference' => 'required',
            'sendingDate' => 'required',
            'receivingDate' => 'nullable',
            'agency_id' => 'nullable'
        ]);

        $group = Group::create([
            'reference' => $request->reference,
            'sendingDate' => $request->sendingDate,
            'receivingDate' => $request->receivingDate,
            'agency_id' => $request->agency_id
        ]);

        $json = response()->json($group, 201);

        Log::debug("The route /Group has been accessed : GroupController@store()");
        Log::debug($json);

        return $json;
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGroupRequest $request, Group $group)
    {
        $this->validate($request, [
            'reference' => 'required',
            'sendingDate' => 'required',
            'receivingDate' => 'nullable',
            'agency_id' => 'nullable'
        ]);

        $group->update([
            'reference' => $request->reference,
            'sendingDate' => $request->sendingDate,
            'receivingDate' => $request->receivingDate,
            'agency_id' => $request->agency_id
        ]);

        $json = response()->json($group, 201);

        Log::debug("The route /Group has been accessed : GroupController@update()");
        Log::debug($json);

        return $json;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
        $group->delete();

        Log::debug("The route /Group has been accessed : GroupController@delete()");
        $json = response()->json(1);
        Log::debug($json);
        return $json;
    }
}
