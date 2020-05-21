<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Technicians;
class AddTechController extends Controller
{
    //
    public function Addtech()
    {
        return view('Admin.Addtech');
    }
    public function insert(Request $request)
    {
        $tech = new Technicians;
        $tech->firstName = $request->fname;
        $tech->lastName = $request->lname;
        $tech->national_id = $request->id;
        $tech->spec = $request->spec;
        $tech->phone = $request->phone;
        $tech->mail = $request->mail;


        $tech->save();

        return redirect()->back();

    }
}
