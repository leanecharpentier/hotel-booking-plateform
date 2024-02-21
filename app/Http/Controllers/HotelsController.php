<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Room;
use Illuminate\Http\Request;

class HotelsController extends Controller
{
    public function index()
    {
        $hotels = Hotel::all();
        return view('hotels.index', compact('hotels'));
    }
    public function show_public()
    {
        $hotels = Hotel::all();
        return view('hotels.show_public', compact('hotels'));
    }
    public function show($id)
    {
        $hotel = Hotel::find($id);
        $rooms = Room::where('hotel_id', $id)->get();
        $rooms->transform(function ($room) {
            $hotel_id = $room->hotel_id;
            $hotel_name = Hotel::where('id', $hotel_id)->value('name');
            $room->hotel_name = $hotel_name;
            return $room;
        });
        return view('hotels.show', compact('hotel', 'rooms'));
    }

    public function create()
    {
        return view('hotels.create');
    }

    public function store(Request $request)
    {
        Hotel::create($request->all());
        return redirect()->route('hotels.index');
    }

    public function edit($id)
    {
        $hotel = Hotel::find($id);
        return view('hotels.edit', compact('hotel'));
    }

    public function update(Request $request, $id)
    {
        $hotel = Hotel::find($id);
        $hotel->name = $request->get('name');
        $hotel->address = $request->get('address');
        $hotel->stars = $request->get('stars');
        $hotel->email = $request->get('email');
        $hotel->telephone = $request->get('telephone');
        $hotel->save();

        return redirect()->route('hotels.index');
    }

    public function destroy(Request $request)
    {
        $hotel = Hotel::find($request->get('id'));
        $hotel->delete();

        return redirect()->route('hotels.index');
    }
}
