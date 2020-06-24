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
      'firstname' => 'required|alpha',
      'lastname' => 'required|alpha',
      'dateOfBirth' => 'required|date',
      'role' => 'required|string',
    ]);

    $employee = Employee::findOrFail($id);
    $employee ->  firstname = $validateData['firstname'];
    $employee ->  lastname = $validateData['lastname'];
    $employee ->  dateOfBirth = $validateData['dateOfBirth'];
    $employee ->  role = $validateData['role'];

    $employee -> save();
    return redirect() -> route('show', $id)
                      -> withSuccess('Updated'
                      .$employee['firstname']
                      .'modifica effettuata con successo!!!');
    }

    public function destroy($id){
    $employee = Employee::findOrFail($id);
    $employee -> delete();
    return redirect() -> route('home')
                      -> withSuccess($employee['firstname']
                      .'modifica effettuata con successo!!!');
    }

}
