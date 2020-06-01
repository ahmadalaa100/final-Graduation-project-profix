<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;
use App\Technicians;

class BookController extends Controller
{
    //
    public function book(){
        $tech = Technicians::all()->where('active',1);

        return view("book")->with('tech',$tech);
    }
    public function create(Request $request)
    {
        $order = new Orders;
        if($request->tech == 0)
        {
            $request->tech = null;
        }

        if($request->photo !=null)
        {
            $image = $request->photo;
            $new_image = time() . $image->getClientOriginalName();
            $image->move('uploads/',$new_image);
            $order->image = 'uploads/' . $new_image;
        }
        $order->name = $request->name;
        $order->mail = $request->mail;
        $order->phone = $request->phone;
        $order->pay = $request->pay;
        $order->addreess = $request->address;
        $order->jobDate = $request->date;
        $order->spec = $request->spec;
        $order->user_id = $request->user_id;
        $order->tech_id = $request->tech;
        $order->jobTime = $request->time;

        $order->save();

        return redirect()->back();
    }
}
