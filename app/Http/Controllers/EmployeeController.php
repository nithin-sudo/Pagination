<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function getData(){
        return $employeeData = Employee::paginate(10);
        //return view('home', compact('employeeData'));
      }
}
