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
    return view('layout.master');
});

// Route sign in/ sign up
Route::get("/sign_in", function(){
    return view("layout.sign_in");})->name("layout.sign_in");
Route::get("/sign_up", function(){
    return view("layout.sign_up");})->name("layout.sign_up");