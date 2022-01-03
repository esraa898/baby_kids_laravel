<?php
namespace App\Http\Repositories;

use App\Models\faq;
use App\Models\course;
use App\Models\slider;
use App\Models\teacher;
use App\Models\activity;
use App\Http\Interfaces\EndUserInterface;
use App\Http\Requests\Contacts\AddContactRequest;
use App\Models\contact;

class EndUserRepository implements EndUserInterface
{
    public function home(){
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
      public function contact (){
          return view('contact');
      }
      public function contactCreate( $request){
         
        contact::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message
        ])  ;
         return redirect()->back();
      }
}