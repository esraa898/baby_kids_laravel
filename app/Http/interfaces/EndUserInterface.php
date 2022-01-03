<?php 
namespace App\Http\Interfaces;



interface EndUserInterface 
{
  public function home();
  public function faQ();
  public function teacher();
  public function course ();
  public function contact (); 
  public function contactCreate( $request); 
}