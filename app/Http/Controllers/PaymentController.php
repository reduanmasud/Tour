<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //

    public function index()
    {
        $payment = Payment::where('confirmed', 0)->get();
        return view('account.confirm-payment',['payments' => $payment]);
    }

    public function confirm(Request $request)
    {
        $request->validate([
            'pay_id',
            'booking_id',

        ]);

        $payment = Payment::find($request->pay_id);
        $payment->confirmed = 1;
        $payment->save();

        $booking = Booking::find($request->booking_id);
        $booking->paid = 1;
        $payment->save();

        return back()->with('success', "Payment Confirmed");
    }
}
