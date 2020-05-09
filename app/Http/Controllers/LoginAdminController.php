<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginAdminController extends Controller
{
    //
    public function loginAdmin(){
        return view("Admin.loginAdmin");
    }
}
