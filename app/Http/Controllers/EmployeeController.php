<?php

namespace App\Http\Controllers;
use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
      $employee = Employee::all();
      return view('home', compact('employee'));
    }

    public function show($id){
      $employee = Employee::findOrFail($id);
      return view('show' , compact('employee'));
    }


}
