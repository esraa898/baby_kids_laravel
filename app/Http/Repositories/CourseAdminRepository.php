<?php
namespace App\Http\Repositories;


use App\Models\course;
use App\Http\Interfaces\AdminInterface;
use App\Http\Interfaces\CourseInterface;
use App\Http\Traits\ImagesTrait;
use RealRashid\SweetAlert\Facades\Alert;

class CourseAdminRepository implements CourseInterface
{
    use ImagesTrait;
    public $course;
    public $alert;
   public function __construct(course $course ,Alert $alert)
   {
    $this->course=$course; 
    $this->alert=$alert; 
   }
    public function index(){
        $courses= $this->course::with('allTeachers:id,name,course_id')->get();
       
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
    public function store( $request){
        $extension=$request->image->extension();
        $fileName= time().'_course.'.$extension;
        $this->uploadImage($request->image,$fileName,'course');
        $this->course::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price,
            'img'=>$fileName
        ]);
        $this->alert::success('Success Title', 'course created');
    return redirect()->back();

    }

    public function delete( $request){
      $course= $this->course::find($request->courseID);
      unlink(public_path($course->img));
      $course->delete();
      $this->alert::success('Success Title', 'course Deleted');
      return redirect()->back();

    }
    public function edit($courseID){
       $course=  $this->course::find($courseID);
       return view('admin.courses.edit',compact('course'));
        
    }
    public function update( $request){
       $course=  $this->course::find($request->courseID);
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
       $this->alert::success('Success Title', 'course updated');
      return redirect(route('admin.course.all'));

    }
}