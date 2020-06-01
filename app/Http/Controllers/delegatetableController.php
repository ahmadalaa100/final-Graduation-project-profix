<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class delegatetableController extends Controller
{
    //
    public function delegatetable(){
        $delegate = User::all()->where('role','delegate');
        return view("Admin.delegatetable")->with('dele',$delegate);
    }

    public function destroy($id)
    {
        $delegate = User::findOrFail($id);

        $delegate->delete();

        return redirect()->back();
    }

    public function edit($id)
    {
        $delegate = User::findOrFail($id);
        return view('Admin.updatedelegate')->with('delegate',$delegate);
    }

    public function update(Request $request,$id)
    {
        $delegate = User::findOrFail($id);


        $delegate->name = $request->name;
        $delegate->phone = $request->phone;
        $delegate->email = $request->mail;

        $delegate->save();

        return redirect()->route('delegatetable');


    }
}
