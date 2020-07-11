<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;
use Session;
use Stripe;
class PayController extends Controller
{
    public function index($id)
    {
        $order = Orders::findOrFail($id);
        return view('pay')->with('order',$order);
    }
    public function charge(Request $request,$id,$price)
    {
        $order = Orders::findOrFail($id);
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => $price * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from Mohmaed Belal." 
        ]);
  
        Session::flash('success', 'Payment successful!');
        $order->payed = 1;
        $order->save();
        return redirect()->route('customerUI');
    }

}
