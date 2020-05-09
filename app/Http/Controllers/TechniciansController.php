<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TechniciansController extends Controller
{
    //
    public function technicians(){
        return view("Admin.technicians");
    }
}
