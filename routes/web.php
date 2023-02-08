<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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

Route::get('/login',function(){
    return '<h1>Login form</h1>';
});

Route::get('chinh-sach-rieng-tu',function(){

});

Route::get('auth/facebook/', function () {
    return Socialite::driver('facebook')->redirect();
});

Route::get('auth/facebook/callback', function () {
    return '<h1>Facebook callback</h1>';
    // return Socialite::driver('facebook')->redirect();
    // Socialite::driver('facebook')->redirect();
});