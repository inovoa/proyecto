<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    return view('welcome');
    //return view('auth.login');
});


Route::get('welcome', function () {
    return view('welcome');
    //return view('auth.login');
});

Route::resource('citas', 'CitasController')->middleware('auth');


Auth::routes();



Route::get('/users', 'UsersController@index');
/*Route::get('/users/{id}',function($id){
    $user = DB::table('users')
    ->where('id', $id)
    ->get();
})->name('users.index');*/


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/change-password', 'Auth\ChangePasswordController@index')->name('password.change');
Route::post('/change-password', 'Auth\ChangePasswordController@changepassword')->name('password.update');