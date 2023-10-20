<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/resto', function () {
    return view('resto'); 
}); 
Route::get('/order', function () {
    return view('order'); 
}); 
Route::get('/history', function () {
    return view('history'); 
}); 
Route::get('/settings', function () {
    return view('settings'); 
}); 
Route::get('/help', function () {
    return view('help_center'); 
}); 
Route::get('/login', function () {
    return view('login'); 
}); 
Route::get('/register', function () {
    return view('register'); 
}); 
Route::get('/forgot', function () {
    return view('forgot'); 
}); 