<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
});
Route::get('index-guest', function () {
    return view('index-guest');
});
Route::get('signin', function () {
    return view('signin');
});
Route::get('signup', function () {
    return view('signup');
});
Route::get('course-detail',function (){
    return view('course-detail');
});
Route::get('profile',function (){
    return view('profile');
});


