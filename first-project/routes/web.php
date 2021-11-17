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

Route::get('/create-step-one', 'CoupleController@createStepOne')->name('couples.create.step.one');
Route::post('/create-step-one', 'CoupleController@postCreateStepOne')->name('couples.create.step.one.post');

Route::get('/create-step-two', 'CoupleController@createStepTwo')->name('create.step.two');
Route::post('/create-step-two', 'CoupleController@postCreateStepTwo')->name('couples.create.step.two.post');

Route::get('/create-step-three', 'CoupleController@createStepThree')->name('create.step.three');
Route::post('/create-step-three', 'CoupleController@postCreateStepThree')->name('couples.create.step.three.post');

Route::get('/create-step-four', 'CoupleController@createStepFour')->name('create.step.four');
Route::post('/create-step-four', 'CoupleController@postCreateStepFour')->name('couples.create.step.four.post');

Route::get('/create-confirm', 'CoupleController@createConfirm')->name('create.confirm');


Route::resource('contacts', 'ContactController');
Route::resource('invites', 'InviteController');
Route::resource('couples', 'CoupleController');
