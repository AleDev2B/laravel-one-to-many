<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'EmployeeController@index' ) -> name('home');
Route::get('/employee/{id}', 'EmployeeController@show' ) -> name('show');
Route::get('/edit/{id}', 'EmployeeController@edit' ) -> name('edit');
Route::get('/update/{id}', 'EmployeeController@show' ) -> name('update');
Route::get('/show/{id}', 'EmployeeController@show' ) -> name('show');
