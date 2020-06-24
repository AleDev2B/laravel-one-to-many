<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'EmployeeController@index' ) -> name('home');
Route::get('/employee/{id}', 'EmployeeController@show' ) -> name('show');
Route::get('/edit/{id}', 'EmployeeController@edit' ) -> name('edit');
Route::post('/update/{id}', 'EmployeeController@update' ) -> name('update');
Route::get('/destroy/{id}', 'EmployeeController@destroy' ) -> name('destroy');
