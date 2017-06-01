<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
class AdminLoginController extends Controller
{
    use AuthenticatesUsers;

    public function __construct(){
      $this->middleware('guest');
    }

    public function showLoginForm(){
      return view('auth.admin-login');
    }
    public function login(Request $request){
      // Validate the form data
      $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required|min:6',
      ]);
      // Attempt tp log in users
      if(Auth::guard('admin')->attempt(['email'=> $request->email, 'password' => $request->password], $request->remember)){
      // If successful redirect to indended location
      return redirect()->intended('admin');
    }
      // If unsuccessful redirect to login
      return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
