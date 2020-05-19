<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TechuiController extends Controller
{
    //
    public function technicianui(){
        return view("technicianui");
    }
    public function techform(){
        return view("techform");
    }
}
