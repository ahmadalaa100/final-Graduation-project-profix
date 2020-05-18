<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class delegatetableController extends Controller
{
    //
    public function delegatetable(){
        return view("Admin.delegatetable");
    }
}
