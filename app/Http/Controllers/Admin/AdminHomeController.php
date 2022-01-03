<?php

namespace App\Http\Controllers\Admin;

use App\Models\slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Interfaces\HomeInterface;
use Illuminate\Support\Facades\Auth;

class AdminHomeController extends Controller
{
  public $HomeInterface;
  public function __construct(HomeInterface $HomeInterface )
  {
     $this->HomeInterface=$HomeInterface;
  }

    public function index()
    {
    return $this->HomeInterface->index();
    }

    
  
}
