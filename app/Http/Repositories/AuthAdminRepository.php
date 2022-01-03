<?php
namespace App\Http\Repositories;



use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Interfaces\AuthInterface;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;

class AuthAdminRepository implements AuthInterface
{
    public function loginPage(){
        return view('admin.login');
    }

    public function login( $request){
        $credentials = $request->only('email','password');
       if(Auth::attempt($credentials)){
        return redirect(route('admin.index'));
         }
         Alert::error('error ', 'User not found ');
         return redirect()->back();
           
    
    
    }
    public function logout($request){

    Session::flush();
        Auth::logout();
        return redirect(route('admin.loginpage'));
    }

    public function signUpPage(){
        return view('admin.signup');
    }

    public function signUp( $request){
        user::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=>Hash::make($request->password) 
        ]);
        Alert::success('Success Title', 'User was created ');
        return redirect(route('admin.index'));
      
    }
}