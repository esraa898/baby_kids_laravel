<?php

namespace App\Http\Controllers;

use App\Models\faq;
use App\Models\course;
use App\Models\slider;
use App\Models\teacher;
use App\Models\activity;
use Illuminate\Http\Request;

class EndUserController extends Controller
{
    public function homeSlider(){
        $sliders=slider::get();
        $activites= activity::get();
        $teachers= teacher::get();
        return view('index',compact('sliders','activites','teachers'));
      }
    
      public function faQ(){
        $faqs=faq::get();
        return view('faq',compact('faqs'));
      }
      public function teacher(){
       
        $teachers = teacher::with('course')->get();
        return view('teachers',compact('teachers'));
      }
      public function course (){
        $courses = course::get();
        return view('courses',compact('courses'));
      }
}
