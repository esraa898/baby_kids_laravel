<?php

namespace App\Http\Controllers\Admin;

use App\Models\slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminHomeController extends Controller
{


    public function index()
    {
     $username= Auth::user()->name;
  
      return view('Admin.index',compact('username'));
    }

    
  
}
