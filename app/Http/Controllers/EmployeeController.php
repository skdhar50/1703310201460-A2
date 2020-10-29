<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function view()
    {
        return view('add');
    }

    public function add( Request $req )
    {
        Employee::create([
            'name' => $req->name,
            'email' => $req->email,
            'date_of_birth' => $req->dob,
            

        ]);
    }
}
