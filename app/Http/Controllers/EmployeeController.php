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
    public function edit($id){
      $employee = Employee::findOrFail($id);
      return view('edit-employee' , compact('employee'));
    }
    public function update(Request $request, $id ){

    $validateData = $request -> validate([
      'firstname' => 'required',
      'lastname' => 'required',
      'dateOfBirth' => 'required',
      'role' => 'required',
    ]);

  dd($validateData);
    }


}
