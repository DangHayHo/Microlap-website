<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
   public function home(){
    return view('features.home.home');
   }

   public function login(){
    return view('features.login.login');
   }

   public function register(){
    return view('features.register.register');
   }

   public function course(){
    return view('features.course-detail.course-detail');
   }

   public function profile(){
    return view('features.profile.profile');
   }
}
