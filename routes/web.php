<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;


Route::get('/',[HomeController::class,'home'])->name('/');
Route::get('home',[HomeController::class,'home'])->name('home');
Route::get('login',[HomeController::class,'login'])->name('login');
Route::get('register',[HomeController::class,'register'])->name('register');
Route::get('course',[HomeController::class,'course'])->name('course');
Route::get('profile',[HomeController::class,'profile'])->name('profile');
Route::post("login/auth",[LoginController::class , 'LoginAuth']);



