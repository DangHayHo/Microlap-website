<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index-guest.index-guest');
});
Route::get('index', function () {
    return view('index.index');
});
Route::get('index-guest', function () {
    return view('index-guest.index-guest');
});
Route::get('signin', function () {
    return view('signin.signin');
});
Route::get('signup', function () {
    return view('signup.signup');
});
Route::get('course-detail',function (){
    return view('course-detail.course-detail');
});
Route::get('profile',function (){
    return view('profile.profile');
});


