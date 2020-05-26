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
        // dd($request->all());
        $email = $request->email;
        $password = $request->password;
        $arr = [
            'email' => $email,
            'password' => $password
        ];
         $level = Account::select(['level'])->whereEmail($email)->get();
        //  dd($level);
         //Auth::user()->level=1;
       if(Auth::attempt($arr) && $level = "1")
      {
        // if(Auth::user()->level=1)
        // {
        //  return redirect('admin');
        // }
        // else{
        //     return redirect('');
        // }
        return redirect('admin');

      }
      else {
         return back()->with("thongbao",'Email hoặc Mật khẩu không hợp lệ')->withInput();
      }

    }
    public function logout(){
        Auth::logout();
        return redirect('login');
    }

}
