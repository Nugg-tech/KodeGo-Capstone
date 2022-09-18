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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile');
});
Route::get('/book', function () {
    return view('book');
})->middleware(['auth'])->name('book');

Route::get('/history', function () {
    return view('history');
})->middleware(['auth'])->name('history');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['middleware'=>['auth']], function(){

    Route::get('/dashboard','App\Http\Controllers\Auth\RegisteredUserController@route')->name('dashboard');

});

require __DIR__.'/auth.php';
