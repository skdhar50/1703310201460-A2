<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function view()
    {
        return view('add');
    }

    public function add( Request $req )
    {
        
    }
}
