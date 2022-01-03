<?php

namespace App\Http\Controllers\Admin;

use App\Models\course;
use Illuminate\Http\Request;
use App\Http\Traits\ImagesTrait;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\courses\AddCourseRequest;
use App\Http\Requests\courses\DeleteCourseRequest;
use App\Http\Requests\courses\UpdateCourseRequest;
use App\Models\teacher;

class AdminCourseController extends Controller
{ 
    use ImagesTrait;
     public function index(){
         $courses= course::with('allTeachers:id,name,course_id')->get();
        
    //      foreach($courses as $course){
    //        foreach($course->allTeachers as $teacher){
    //        dd($teacher->name);
    //  }  
    //      }
         
         return view('admin.courses.allcourses',compact('courses'));
     }
     public function create(){
         return view('admin.courses.create');
     }
     public function store(AddCourseRequest $request){
         $extension=$request->image->extension();
         $fileName= time().'_course.'.$extension;
         $this->uploadImage($request->image,$fileName,'course');
         course::create([
             'name'=>$request->name,
             'description'=>$request->description,
             'price'=>$request->price,
             'img'=>$fileName
         ]);
         Alert::success('Success Title', 'course created');
     return redirect()->back();

     }

     public function delete(DeleteCourseRequest $request){
       $course=  course::find($request->courseID);
       unlink(public_path($course->img));
       $course->delete();
       Alert::success('Success Title', 'course Deleted');
       return redirect()->back();

     }
     public function edit($courseID){
        $course=  course::find($courseID);
        return view('admin.courses.edit',compact('course'));
         
     }
     public function update(UpdateCourseRequest $request){
        $course=  course::find($request->courseID);
        if($request->has('image')){
            $extension=$request->image->extension();
            $fileName= time().'_course.'.$extension;
            $this->uploadImage($request->image,$fileName,'course',$course->img);
        }
        $course->update([
            'name'  =>$request->name,
            'description'=>$request->description,
            'price'=> $request->price,
            'img'=> (isset($fileName)) ? $fileName : $course->getRawOriginal('img')
        ]);
        Alert::success('Success Title', 'course updated');
       return redirect(route('admin.course.all'));

     }
     
}