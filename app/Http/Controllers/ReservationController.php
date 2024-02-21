<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::with('room', 'room.hotel')->get();
        return view('reservations.index', compact('reservations'));
    }


    public function edit($id)
    {
        $reservation = Reservation::find($id);
        return view('reservations.edit', compact('reservation'));
    }

    public function update(Request $request, $id)
    {
        $reservation = Reservation::find($id);
        $reservation->room_id = $request->get('room_id');
        $reservation->name = $request->get('name');
        $reservation->email = $request->get('email');
        $reservation->telephone = $request->get('telephone');
        $reservation->start_date = $request->get('start_date');
        $reservation->end_date = $request->get('end_date');
        $reservation->nb_person = $request->get('nb_person');
        $reservation->save();
        return redirect()->route('reservations.index');
    }

    public function destroy(Request $request)
    {
        $reservation = Reservation::find($request->get('id'));
        $reservation->delete();

        return redirect()->route('reservations.index');
    }
}
