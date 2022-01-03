<?php

namespace App\Http\Controllers\Admin;

use App\Models\teacher;
use Illuminate\Http\Request;
use App\Http\Traits\ImagesTrait;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\teachers\AddTeacherRequest;
use App\Http\Requests\teachers\DeleteTeacherRequest;
use App\Http\Requests\teachers\UpdateTeacherRequest;

class AdminTeacherController extends Controller
{ 
    use ImagesTrait;
    public function index(){
        $teachers= teacher::with('course')->get();
        
        return view('admin.teacher.allteachers',compact('teachers'));
    }
    public function create(){
        return view('admin.teacher.create');
    }
    public function store(AddTeacherRequest $request){
        $extension=$request->image->extension();
        $fileName= time().'_teacher.'.$extension;
        $this->uploadImage($request->image,$fileName,'teacher');
        teacher::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'img'=>$fileName,
            'course_id'=>$request->course_id,
        ]);
        Alert::success('Success Title', 'teacher Added');
    return redirect()->back();

    }
    public function delete(DeleteTeacherRequest $request){
        $teacher=  teacher::find($request->teacherID);
        unlink(public_path($teacher->img));
        $teacher->delete();
        Alert::success('Success Title', 'teacher Deleted');
        return redirect()->back();
 
      }
      public function edit($teacherID){
         $teacher=  teacher::find($teacherID);
         return view('admin.teacher.edit',compact('teacher'));
          
      }
      public function update(UpdateTeacherRequest $request){
         $teacher=  teacher::find($request->teacherID);
         if($request->has('image')){
             $extension=$request->image->extension();
             $fileName= time().'_teacher.'.$extension;
             $this->uploadImage($request->image,$fileName,'teacher',$teacher->img);
         }
         $teacher->update([
             'name'  =>$request->name,
             'description'=>$request->description,
             'img'=> (isset($fileName)) ? $fileName : $teacher->getRawOriginal('img'),
             'course_id'=>($request->has('course_id')) ? $request->course_id : $teacher->course_id
         ]);
         Alert::success('Success Title', 'teacher updated');
        return redirect(route('admin.teacher.all'));
 
      }
}
 