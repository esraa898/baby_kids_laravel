<?php
namespace App\Http\Repositories;


use App\Models\teacher;
use App\Http\Traits\ImagesTrait;
use App\Http\Interfaces\TeacherInterface;
use RealRashid\SweetAlert\Facades\Alert;

class TeacherAdminRepository implements TeacherInterface
{
    use ImagesTrait;
    public function index(){
        $teachers= teacher::with('course')->get();
        
        return view('admin.teacher.allteachers',compact('teachers'));
    }
    public function create(){
        return view('admin.teacher.create');
    }
    public function store( $request){
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
    public function delete( $request){
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
      public function update( $request){
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