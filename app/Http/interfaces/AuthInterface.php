<?php 
namespace App\Http\Interfaces;



interface AuthInterface 
{

  public function loginPage();
  public function login( $request); 
  public function logout( $request);
  public function signUpPage();
  public function signUp( $request);
  
}