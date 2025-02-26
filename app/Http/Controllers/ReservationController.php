<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Http\Requests\Reservations\CreateRequest;
use Carbon\Carbon;

class ReservationController extends Controller
{
    public function store(CreateRequest $request)
    {
        try {
            info('ReservationController@store', ['request' => $request->all()]);
            $reservation = Reservation::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'date' => Carbon::parse($request->date)->toDateString(),
                'time' => Carbon::parse($request->time)->toTimeString(),
                'pax' => $request->pax,
                'event_id' => $request->event_id ?? null,
                'note' => $request->note,
                'type' => $request->type,
            ]);

            info('reservation created', ['reservation' => $reservation]);

            return redirect()->route('reservation.form')->with('status', 200)
                ->with('message', 'Reservation created successfully!')
                ->with('details', 'Thank you, ' . $reservation->first_name . '! Your reservation for ' . $reservation->pax . ($reservation->pax > 1 ? ' people' : ' person') . ' has been confirmed.')
                ->with('datetime', 'Date: ' . $reservation->date . ' | Time: ' . $reservation->time)
            ;
        } catch (\Exception $e) {
            info('An error occurred while creating the reservation', ['error' => $e]);
            return redirect()->route('reservation.form')->with('status', 500)
                ->with('message', 'An error occurred while creating the reservation!')
                ->with('details', $e->getMessage());
        }
    }
}
