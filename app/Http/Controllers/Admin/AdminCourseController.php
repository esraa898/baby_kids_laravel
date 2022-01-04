<?php

namespace App\Http\Controllers\Admin;

use App\Models\course;
use App\Models\teacher;
use Illuminate\Http\Request;
use App\Http\Traits\ImagesTrait;
use App\Http\Controllers\Controller;

use App\Http\Interfaces\CourseInterface;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\courses\AddCourseRequest;
use App\Http\Requests\courses\DeleteCourseRequest;
use App\Http\Requests\courses\UpdateCourseRequest;

class AdminCourseController extends Controller
{ 
    public $CourseInterface;
    public function __construct(CourseInterface $CourseInterface)
    {
     $this->CourseInterface=$CourseInterface;   
    }
    use ImagesTrait;
     public function index(){
      return $this->CourseInterface->index();
     }

     public function create(){
        return $this->CourseInterface->create(); 
     }
     public function store(AddCourseRequest $request){
        return $this->CourseInterface->store($request);
     }

     public function delete(DeleteCourseRequest $request){
        return $this->CourseInterface->Delete($request);
      

     }
     public function edit($courseID){
        return $this->CourseInterface->edit($courseID);
         
     }
     public function update(UpdateCourseRequest $request){
        return $this->CourseInterface->update($request);
     }
     
}