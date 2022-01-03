<?php
namespace App\Http\Repositories;


use Illuminate\Support\Facades\Auth;
use App\Http\Interfaces\HomeInterface;
use RealRashid\SweetAlert\Facades\Alert;

class HomeAdminRepository implements HomeInterface
{


    public function index()
    {
     $username= Auth::user()->name;
  
      return view('Admin.index',compact('username'));
    }
 }