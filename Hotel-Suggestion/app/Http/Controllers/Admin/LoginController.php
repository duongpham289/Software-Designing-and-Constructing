<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Entities\Account;
use App\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm(){
        return view('admin.auth.login');
    }
    public function login(LoginRequest $request){

        $credentials = $request->only(['email','password']);
        $credentials['level'] = '1';

       if(Auth::attempt($credentials))
      {
        return redirect('admin');

      }
      else {
         return back()->with("thongbao",'Email hoặc Mật khẩu không hợp lệ')->withInput();
      }

    }
    public function logout(){
        Auth::logout();
        return redirect('admin/login');
    }

}
