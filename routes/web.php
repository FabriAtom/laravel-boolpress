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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Auth::routes();


Route::middleware('auth')
    ->prefix('admin')
    ->name('admin.')
    ->namespace('Admin')
    ->group(function () {
        Route::get('/home', 'HomeController@index')->name('home');

        Route::resource('posts', 'PostController');

        Route::resource('tags', 'TagController')->only(['show']);
});

// route del frontend che torno la view guest
// qualsiasi rotta ci rimanda alla guest.home
route::get('{any?}', function(){
    return view('guest.home');
})->where('any','.*');