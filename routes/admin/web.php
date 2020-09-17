<?php

use Illuminate\Support\Facades\Route;

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

//Auth::routes([
//    'register' => false,
//    'login'=>false
//]);


/* begin auth admin */
Route::prefix('admin')->name('admin.')->group(function(){

    /*   #################  begin admin routes  ################# */

    Route::get('/','adminController@index')->name('home');


    Route::resource('mail','mailController')->except(['create','update']);

    Route::post('mail/delete','mailController@delete')->name('mail.delete');


    /*   #################  End admin routes  ################# */
});

/* End auth admin*/

/* Begin auth guest */

//Route::prefix('admin')->name('admin.')->group(function(){
//
////    start mail routes
//
//
//});
/* End auth guest */




