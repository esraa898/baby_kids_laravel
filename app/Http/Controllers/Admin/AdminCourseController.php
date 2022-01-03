<?php

namespace App\Http\Controllers\Admin;

use App\Models\course;
use App\Models\teacher;
use Illuminate\Http\Request;
use App\Http\Traits\ImagesTrait;
use App\Http\Controllers\Controller;
use App\Http\Interfaces\AdminInterface;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\courses\AddCourseRequest;
use App\Http\Requests\courses\DeleteCourseRequest;
use App\Http\Requests\courses\UpdateCourseRequest;

class AdminCourseController extends Controller
{ 
    public $AdminInterface;
    public function __construct(AdminInterface $AdminInterface)
    {
     $this->AdminInterface=$AdminInterface;   
    }
    use ImagesTrait;
     public function index(){
      return $this->AdminInterface->index();
     }

     public function create(){
        return $this->AdminInterface->create(); 
     }
     public function store(AddCourseRequest $request){
        return $this->AdminInterface->store($request);
     }

     public function delete(DeleteCourseRequest $request){
        return $this->AdminInterface->Delete($request);
      

     }
     public function edit($courseID){
        return $this->AdminInterface->edit($courseID);
         
     }
     public function update(UpdateCourseRequest $request){
        return $this->AdminInterface->update($request);
     }
     
}