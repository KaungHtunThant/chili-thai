<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Http\Requests\Reservations\CreateRequest;
use Carbon\Carbon;
use App\Models\Event;
use App\Notifications\Admins\ReservationNotification as AdminsReservationNotification;
use App\Notifications\Customers\ReservationNotification;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Spatie\GoogleCalendar\Event as GoogleCalendarEvent;

class ReservationController extends Controller
{
    public function store(CreateRequest $request)
    {
        try {
            DB::beginTransaction();

            $user = User::find(1);
            if(!$user) {
                Throw new \Exception('There was an error while creating the reservation');
            }

            if($request->type == 'catering' && !$request->has('event')) {
                Throw new \Exception('Event is required for catering');
            }

            $event_id = null;
            if ($request->has('event')) {
                $event = Event::where('slug', $request->event)->first();
                $event_id = $event ? $event->id : null;
            }

            $reservation = Reservation::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'date' => Carbon::parse($request->date)->toDateString(),
                'time' => Carbon::parse($request->time)->toTimeString(),
                'pax' => $request->pax,
                'event_id' => $event_id,
                'note' => $request->note,
                'type' => $request->type,
            ]);

            DB::commit();

            // $calendar = GoogleCalendarEvent::create([
            //     'name' => 'Reservation for ' . $reservation->first_name . ' ' . $reservation->last_name . ' at Chili Thai Restaurant',
            //     'startDateTime' => Carbon::parse($reservation->date . ' ' . $reservation->time),
            //     'endDateTime' => Carbon::parse($reservation->date . ' ' . $reservation->time)->addHours(2),
            // ]);

            // $calendar->addAttendee([
            //     'email' => $reservation->email
            // ]);

            // $calendar->save();

            $reservation->notify(new ReservationNotification());

            $user->notify(new AdminsReservationNotification($reservation));

            return redirect()->route(($request->type == 'reservation' ? 'reservation' : 'catering') . '.form')->with('status', 200)
                ->with('message', 'Reservation created successfully!')
                ->with('details', 'Thank you, ' . $reservation->first_name . '! Your reservation for ' . $reservation->pax . ($reservation->pax > 1 ? ' people' : ' person') . ' has been made. We will contact you back shortly.')
                ->with('datetime', 'Date: ' . Carbon::parse($reservation->date)->format('m-d-Y') . ' | Time: ' . Carbon::parse($reservation->time)->format('h:i A'));
        } catch (\Exception $e) {
            DB::rollBack();

            info('An error occurred while creating the reservation', ['error' => $e]);
            return redirect()->route('reservation.form')->with('status', 500)
                ->with('message', 'An error occurred while creating the reservation!')
                ->with('details', $e->getMessage());
        }
    }
}
