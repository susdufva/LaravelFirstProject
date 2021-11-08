<?php

use App\Http\Controllers\CoupleController; 
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
Route::get('/step1', function () {
    return view('couples.create');
});
Route::get('/step2', function () {
    return view('couples.step2');
});
Route::get('/step3', function () {
    return view('couples.step3');
});
Route::get('/step4', function () {
    return view('invites.create');
});
Route::get('/edit', function () {
    return view('couples.edit');
});

Route::get('/confirm', function () {
    return view('couples.confirm');
});  

Route::resource('contacts', 'ContactController');
Route::resource('invites', 'InviteController');
Route::resource('couples', CoupleController::class);

//Route::put('/couples/{id}', [CoupleController::class, 'update']);