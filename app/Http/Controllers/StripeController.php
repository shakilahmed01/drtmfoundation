<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Stripe;
use Session;

class StripeController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        return view('stripe.stripe');
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {

      $first_name = $request->first_name;
      $amount = $request->amount;
      $user_phone = $request->user_phone;

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([

                "amount" => 100 * $amount,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from Dr.Tm Foundation by ".$user_phone
        ]);

        Session::flash('success', 'Payment successful!');

        return back();
    }
}
