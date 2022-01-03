<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Http\Interfaces\AuthInterface;
use App\Http\Requests\SignUpRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;


class AuthController extends Controller
{
    public $AuthInterface;
    public function __construct(AuthInterface $AuthInterface )
    {
       $this->AuthInterface=$AuthInterface;
    }
    public function loginPage(){
        return $this->AuthInterface->loginPage();
    }

    public function login(LoginRequest $request){
       
        return $this->AuthInterface->login($request);
    
    }
    public function logout(Request $request){
        return $this->AuthInterface->logout($request);
    
    }

    public function signUpPage(){
        return $this->AuthInterface->signUpPage();
    }

    public function signUp(SignUpRequest $request){
        return $this->AuthInterface->signUp($request);
      
    }
}
