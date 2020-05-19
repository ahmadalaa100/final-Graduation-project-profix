<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Technicians;
class TechniciansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Technicians = DB::table('technicians')->orderBy('created_at','desc')->paginate(10);
        return view('Admin.technicians')->with('tech',$Technicians);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Admin.technicians");
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
        $Technicians = Technicians::findOrFail($id);
        return view('Admin.updatetech')->with('tech',$Technicians);

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
        $Technicians = Technicians::findOrFail($id);

        $Technicians->firstName = $request->firstName;
        $Technicians->lastName = $request->lastName;
        $Technicians->spec = $request->spec;
        $Technicians->mail = $request->mail;
        $Technicians->phone = $request->phone;
        $Technicians->national_id = $request->national_id;

        $Technicians->save();

        return redirect()->route('technicians');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Technicians = Technicians::findOrFail($id);
        $Technicians->delete();

        return redirect()->back();
    }

    public function freeze($id)
    {
        $Technicians = Technicians::findOrFail($id);
        $Technicians->active = 0;
        $Technicians->save();

        return redirect()->back();

    }
    public function active($id)
    {
        $Technicians = Technicians::findOrFail($id);
        $Technicians->active = 1;
        $Technicians->save();

        return redirect()->back();

    }
}
