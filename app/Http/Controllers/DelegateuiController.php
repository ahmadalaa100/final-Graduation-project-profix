<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;
class DelegateuiController extends Controller
{
    //
    public function delegate(){
        $orders = Orders::all()->where('pay','cash');
        return view("delegate")->with('orders',$orders);
    }
    public function delegateform(){
        return view("delegateform");
    }
}
