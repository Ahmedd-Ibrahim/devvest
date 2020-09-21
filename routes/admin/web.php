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



/* begin auth admin */
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function(){

    /*   #################  begin admin routes  ################# */

    Route::get('/','adminController@index')->name('home');

    // maill routes
    Route::resource('mail','mailController')->except(['create','update']);

    Route::post('mail/delete','mailController@delete')->name('mail.delete');
      // start portfolio
    Route::resource('portfolio', 'PortfolioController')->except(['show']);
      // start testimony
    Route::resource('testimony', 'TestimonyController')->except(['show']);

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




