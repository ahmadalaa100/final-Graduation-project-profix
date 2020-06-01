<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Orders;
use App\User;
class CustomeruiController extends Controller
{
    //
    public function customer(){


        $id = Auth::id();

        $orders = DB::table('orders')->join('users','users.id','=','orders.user_id')
        ->select('orders.id','users.name','orders.addreess','orders.spec','orders.jobDate','orders.jobTime','orders.payed')
        ->where('users.id',$id)->get();
        
        return view("customer")->with('orders',$orders);
        
    }

    public function customerform(){
        return view("customerform");
    }
}
