<?php

namespace App\Http\Controllers;

use App\Models\faq;
use App\Models\course;
use App\Models\slider;
use App\Models\teacher;
use App\Models\activity;
use Illuminate\Http\Request;
use App\Http\Interfaces\EndUserInterface;
use App\Http\Requests\Contacts\AddContactRequest;

class EndUserController extends Controller
{
    public $EndUserInterface;

    public function __construct(EndUserInterface $EndUserInterface)
    {
      $this->EndUserInterface =$EndUserInterface;
    }
     
    public function home(){
      return $this->EndUserInterface->home();
    }
    public function faQ(){
      return $this->EndUserInterface->faQ();
    }
    public function teacher(){
      return $this->EndUserInterface->teacher();
    }
    public function course (){
      return $this->EndUserInterface->course();
    }
    public function contact (){
      return $this->EndUserInterface->contact();
    }
    public function contactCreate( AddContactRequest $request){
      return $this->EndUserInterface->contactCreate(  $request);
    }
      
}
