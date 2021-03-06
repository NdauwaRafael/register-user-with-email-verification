<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::group(['namespace' => 'Dashboard'], function () {
    Route::get('/', 'DashboardController@index');
    Route::get('/dashboard', 'DashboardController@dashboard');
});
//
//Route::get('{vue_capture?}', function () {
//    return view('dashboard.index');
//})->where('vue_capture', '[\/\w\.-]*');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('activate/{token}', 'Auth\RegisterController@activate')
    ->name('activate');


//Route::get('/{vue_capture?}', function () {
//    if (!\Illuminate\Support\Facades\Auth::user()) return redirect('/login');
//    return view('layouts.home');
//})->where('vue_capture', '[\/\w\.-]*');
