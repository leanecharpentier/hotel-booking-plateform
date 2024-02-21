<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Hotel;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        $rooms->transform(function ($room) {
            $hotel_id = $room->hotel_id;
            $hotel_name = Hotel::where('id', $hotel_id)->value('name');
            $room->hotel_name = $hotel_name;
            return $room;
        });
        return view('rooms.index', compact('rooms'));
    }

    public function create()
    {
        $hotels = Hotel::all();
        return view('rooms.create', compact('hotels'));
    }

    public function store(Request $request)
    {
        $room = Room::create($request->all());
        return redirect()->route('rooms.index');
    }

    public function edit($id)
    {
        $room = Room::find($id);
        $hotels = Hotel::all();
        $hotel_id = $room->hotel_id;
        $hotel = Hotel::where('id', $hotel_id);
        return view('rooms.edit', compact('room', 'hotel', 'hotels'));
    }

    public function update(Request $request, $id)
    {
        $room = Room::find($id);
        $room->hotel_id = $request->get('hotel_id');
        $room->numero = $request->get('numero');
        $room->capacity = $request->get('capacity');
        $room->price = $request->get('price');
        $room->save();

        return redirect()->route('rooms.index');
    }

    public function destroy(Request $request)
    {
        $room = Room::find($request->get('id'));
        $room->delete();

        return redirect()->route('rooms.index');
    }
}
