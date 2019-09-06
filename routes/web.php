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
Route::view('/','welcome');
Route::view('contact','contact');
Route::view('about','about');


Route::get('customers', function() {

    
});


