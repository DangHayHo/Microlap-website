<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class LoginController extends Controller
{
    public function __construct(){}
    public function LoginAuth(Request $request){
        $request->validate([
            'username'=>'required|regex:/^[\w_-]+$/|max:20',
            'password'=>'required|min:8'
        ],[
            'username.required'=>'Bắt buộc nhập tên tài khoản',
          
            'password.required'=>'Bắt buộc nhập Mật khẩu',
            'password.min'=>'Mật khẩu quá ngắn',

        ]);
        $arr = [
            'email' =>$request->username,
            'password' =>($request->password),
        ];
        if(Auth::guard('taikhoan')->attempt($arr)){
            // dd('thành công');
            $request->session()->put('email', $request->username);
            // dd($request->session()->all());
            // return view('home')->with('username', $request->username);
            // dd(session()->get('TenTaiKhoan'));
            $cart = json_decode((Storage::disk('local')->get(session()->get('email').'.txt')), true);
            if($cart!='')
                session()->put('GH', $cart);
            return redirect()->route('home')->with('username', $request->username);
        }else{
            return redirect()->back()->with('fail', 'Mật Khẩu hoặc tài khoản chưa chính xác');
        }
    }
    }
  

    

