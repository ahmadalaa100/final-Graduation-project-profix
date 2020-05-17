<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;
class BookController extends Controller
{
    //
    public function book(){
        return view("book");
    }
    public function create(Request $request)
    {
        $order = new Orders;

        $order->name = $request->name;
        $order->mail = $request->mail;
        $order->phone = $request->phone;
        $order->pay = $request->pay;
        $order->addreess = $request->address;
        $order->jobDate = $request->date;
        $order->spec = $request->spec;
        $order->jobTime = $request->time;


        $order->save();

        return redirect()->back();
    }
}
