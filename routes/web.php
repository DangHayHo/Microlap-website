<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('features.home.home');
})->name('/');
Route::get('home', function () {
    return view('features.home.home');
})->name('home');
Route::get('client', function () {
    return view('features.home.client');
})->name('client');
Route::get('login', function () {
    return view('features.login.login');
})->name('login');
Route::get('register', function () {
    return view('features.register.signup');
})->name('register');
Route::get('course',function (){
    return view('features.course-detail.course-detail');
})->name('course');
Route::get('profile',function (){
    return view('features.profile.profile');
})->name('profile');


