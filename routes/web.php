<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'EmployeeController@index' ) -> name('home');
Route::get('/employee/{id}', 'EmployeeController@show' ) -> name('show');
