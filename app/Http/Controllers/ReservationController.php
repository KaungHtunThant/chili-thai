<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Http\Requests\Reservations\CreateRequest;
use Carbon\Carbon;
use App\Models\Event;
use App\Models\Setting;
use App\Notifications\Admins\ReservationNotification as AdminsReservationNotification;
use App\Notifications\Customers\ReservationNotification;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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

            $reservation->notify(new ReservationNotification());

            $user->notify(new AdminsReservationNotification($reservation));

            $google_calendar_url = $this->getGoogleCalendarUrl($reservation);



            return redirect()->route(($request->type == 'reservation' ? 'reservation' : 'catering') . '.form')->with('status', 200)
                ->with('message', 'Reservation created successfully!')
                ->with('details', 'Thank you, ' . $reservation->first_name . '! Your reservation for ' . $reservation->pax . ($reservation->pax > 1 ? ' people' : ' person') . ' has been made. We will contact you back shortly.')
                ->with('datetime', 'Date: ' . Carbon::parse($reservation->date)->format('m-d-Y') . ' | Time: ' . Carbon::parse($reservation->time)->format('h:i A'))
                ->with('google_calendar_url', $google_calendar_url);
        } catch (\Exception $e) {
            DB::rollBack();

            info('An error occurred while creating the reservation', ['error' => $e]);
            return redirect()->route('reservation.form')->with('status', 500)
                ->with('message', 'An error occurred while creating the reservation!')
                ->with('details', $e->getMessage());
        }
    }

    public function getGoogleCalendarUrl(Reservation $reservation): string
    {
        $start = str_replace('-', '', $reservation->date . ' ' . $reservation->time);
        $end = str_replace('-', '', date('Y-m-d H:i', strtotime($start . ' +2 hours')));
        $app_name = Setting::where('key', 'company-name')->first()->value;
        $company_location = Setting::where('key', 'company-location')->first()->value;

        $url = 'https://www.google.com/calendar/render?action=TEMPLATE&text=' . urlencode('Reservation at ' . $app_name) . '&dates=' . $start . '/' . $end . '&details=' . urlencode($reservation->note) . '&location=' . urlencode($company_location) . '&sf=true&output=xml';

        return $url;
    }
}
