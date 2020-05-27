<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;
use Stripe;
class PayController extends Controller
{
    public function index()
    {
        return view('pay');
    }
    public function charge(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from Mohmaed Belal." 
        ]);
  
        Session::flash('success', 'Payment successful!');
          
        return back();
    }

}
