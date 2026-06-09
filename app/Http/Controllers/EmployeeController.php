<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
public function show($id){
    $employee = Employee::find($id)->first();  //collection
    // dd($employee->visaCard());
    return view('emp.show',['employee'=>$employee]);
}

public function index(){
        $employee = Employee::with('visaCard')->get();  //collection
        dd($employee);
 return view('emp.show',['employee'=>$employee]);
}
}
