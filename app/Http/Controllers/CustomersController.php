<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class CustomersController extends Controller
{
    //
    public function customers(){
        return view("Admin.customers");
    }

    public function addUser(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone'=>$request->phone
        ]);

        return redirect()->route('indexAdmin');

    }
}
