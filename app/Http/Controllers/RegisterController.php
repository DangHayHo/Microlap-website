<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    private $users;
    public function __construct()
    {
        $this->users = new SignIn();
    }


    public function checkinfo(Request $request){
        $request->validate([
            'fullname' => 'required|min:5',
            'dob' => 'required|date',
            'username' => 'required|regex:/^[\w_-]+$/|max:20|unique:taikhoan,TenTaiKhoan',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'phoneNum' => 'required|regex:/^[0-9]{10}$/',
        ], [
            'fullname.required' => 'Họ và tên bắt buộc phải nhập',
            'fullname.min' => 'Họ và tên phải từ :min ký tự trở lên',
            'dob.required' => "Ngày sinh bắt buộc phải nhập",
            'dob.date' => "Ngày sinh không hợp lệ",
            'username.required' => "Tên tài khoản bắt buộc phải nhập",
            'username.regex' => "Tên tài khoản chỉ được chứa ký tự, số và dấu '-' hoặc '_'",
            'username.unique' => "Tên tài khoản đã tồn tại",
            'email.required' => "Email bắt buộc phải nhập",
            'email.email' => "Email không đúng định dạng",
            'password.required' => "Password bắt buộc phải nhập",
            'password.min' => "Password phải có ít nhất 6 ký tự",
            'password.regex' => "Password phải chứa ít nhất 1 ký tự viết hoa, viết thường, ký tự đặc biệt, và số",
            'phoneNum.required' => "Số điện thoại bắt buộc phải nhập",
            'phoneNum.regex' => "Số điện thoại bao gồm 10 số",
        ]);
}
}
