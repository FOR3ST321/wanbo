<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;
use App\Models\Package;
use App\Models\StoreBranch;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/page/room/roomMainMenu',[
            'active' => ['packages', true, 'room-list'],
            'rooms' => Room::with('order')->get(),
            'js' => '/admin/js/deleteConfirm.js'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/page/room/insertRoom',[
            'active' => ['packages', true, 'room-list'],
            'packages' => Package::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRoomRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'room_name' => 'required|max:64',
            'description' => 'max:255',
            'package_id' => 'required',
            'store_branch_id' => 'required'
        ]);
        
        Room::create($validatedData);

        return redirect('/wanboAdmin/rooms')->with('success', 'New room has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        return view('admin/page/room/showRoomDetail',[
            'active' => ['packages', true, 'room-list'],
            'room' => $room,
            'packages' => Package::all(),
            'branches' => StoreBranch::all(),
            'js' => '/admin/js/deleteConfirm.js'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        return view('admin/page/room/editRoom',[
            'active' => ['packages', true, 'room-list'],
            'room' => $room,
            'packages' => Package::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRoomRequest  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        $validatedData = $request->validate([
            'room_name' => 'required|max:64',
            'description' => 'max:255',
            'package_id' => 'required',
            'store_branch_id' => 'required'
        ]);

        Room::where('id', $room->id)->update($validatedData);

        return redirect('/wanboAdmin/rooms')->with('success', 'Room has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        Room::destroy($room->id);
        return redirect('/wanboAdmin/rooms')->with('success', 'Room has been deleted!');
    }
}
