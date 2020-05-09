<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexAdminController extends Controller
{
    //
    public function indexAdmin(){
        return view("Admin.indexAdmin");
    }
}
