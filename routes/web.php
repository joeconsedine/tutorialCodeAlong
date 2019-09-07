<?php

/*
|--------------------------------------------------------------------------
| Web Routes - git rulez
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

 Auth::routes();

// Route::get('/home', 'HomeController@index')/*->name('home')*/;


Route::view('control','control');
Route::view('tinker','tinker');
Route::view('/','home');
Route::view('contact','contact');
Route::view('about','about');
Route::post('customers', 'CustomersController@store');
Route::post('increment', 'CustomersController@increment');
//Route::view('customer','customer');

// go get the customer controller and run the list function
// you'll be able to put all the increment and decrements into one file under different function calls... maybe!
Route::get('customers', 'CustomersController@list');


