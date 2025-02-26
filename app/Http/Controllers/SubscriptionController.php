<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;
// use App\Notifications\SubscriptionNotification;
use Illuminate\Support\Facades\DB;

class SubscriptionController extends Controller
{
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $subscription = Subscription::create([
                'email' => $request->email,
            ]);

            DB::commit();

            // $subscription->notify(new SubscriptionNotification());

            return redirect()->route('home')->with('status', 200)
                ->with('message', 'Thank you for subscribing to our newsletter!');
        } catch (\Exception $e) {
            DB::rollBack();

            info('An error occurred while creating the subscription', ['error' => $e]);
            return redirect()->route('home')->with('status', 500)
                ->with('message', 'An error occurred while creating the subscription!')
                ->with('details', $e->getMessage());
        }
    }
}
