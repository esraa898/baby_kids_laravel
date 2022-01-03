<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\SignUpRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;


class AuthController extends Controller
{
    public function loginPage(){
        return view('admin.login');
    }

    public function login(LoginRequest $request){
        $credentials = $request->only('email','password');
       if(Auth::attempt($credentials)){
        return redirect(route('admin.index'));
         }
         Alert::error('error ', 'User not found ');
         return redirect()->back();
           
    
    
    }
    public function logout(Request $request){

    Session::flush();
        Auth::logout();
        return redirect(route('admin.loginpage'));
    }

    public function signUpPage(){
        return view('admin.signup');
    }

    public function signUp(SignUpRequest $request){
        user::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=>Hash::make($request->password) 
        ]);
        Alert::success('Success Title', 'User was created ');
        return redirect(route('admin.index'));
      
    }
}
