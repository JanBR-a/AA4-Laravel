<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $subscription = $user->subscription()->latest()->first();
        $countDown = null;

        if ($subscription) {
            $expiring_date = Carbon::parse($subscription->expiring_date);
            $countDown = Carbon::now()->diffInDays($expiring_date, false);
        }

        return view('subscription', compact('subscription', 'countDown'));
    }


    public function update(Request $request, $id)
    {
        $subscription = Subscription::findOrFail($id);

        $subscription->update([
            'expiring_date' => Carbon::parse($subscription->expiring_date)->addDays(30)
        ]);

        return redirect()->back()->with('success', 'Subscription extended by 30 days successfully!');
    }

    public function extend(Request $request)
    {
        $user = Auth::user();
        $subscription = $user->subscription()->latest()->first();

        if ($subscription) {
            $expiring_date = Carbon::parse($subscription->expiring_date)->addDays(30);
            
            $subscription->expiring_date = $expiring_date;

            $subscription->active = $expiring_date > $subscription->starting_date;

            $subscription->save();

            return redirect()->back()->with('', 'Subscription extended by 30 days successfully!');
        } else {
            return redirect()->route('subscription.index')->with('failure', 'You are not subscribed');
        }
    }
}
