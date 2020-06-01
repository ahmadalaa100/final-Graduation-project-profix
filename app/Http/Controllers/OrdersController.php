<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Orders;
use App\Technicians;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $orders = DB::table('orders')
        ->leftJoin('technicians','technicians.id','=','orders.tech_id')
        ->select('orders.id','orders.name','orders.mail','orders.phone','orders.addreess','orders.spec','orders.jobDate','orders.jobTime'
        ,'technicians.firstName','technicians.lastName')
        ->orderBy('orders.created_at', 'desc')->paginate(10);

        $tech = Technicians::all()->where('active',1);
        
        return view("Admin.customers")
        ->with('order',$orders)
        ->with('tech',$tech);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orders = Orders::findOrfail($id);

        return view('Admin.updatecustomers')->with('o',$orders);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $orders = Orders::findOrFail($id);
        $orders->name = $request->name;
        $orders->mail = $request->mail;
        $orders->addreess = $request->addreess;
        $orders->phone = $request->phone;
        $orders->jobDate = $request->jobDate;
        $orders->jobTime = $request->jobTime;
        $orders->spec = $request->spec;

        $orders->save();

        return redirect()->route('customers');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orders = Orders::findOrfail($id);
        $orders->delete();

        return redirect()->back();
    }

    public function changeAssign(Request $request,$id)
    {
        $order = Orders::findOrFail($id);

        $order->tech_id = $request->tech;

        $order->save();

        return redirect()->back();
    }
}
