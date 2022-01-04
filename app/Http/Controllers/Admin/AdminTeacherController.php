<?php

namespace App\Http\Controllers\Admin;

use App\Models\teacher;
use Illuminate\Http\Request;
use App\Http\Traits\ImagesTrait;
use App\Http\Controllers\Controller;
use App\Http\Interfaces\AdminInterface;
use App\Http\Interfaces\TeacherInterface;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\teachers\AddTeacherRequest;
use App\Http\Requests\teachers\DeleteTeacherRequest;
use App\Http\Requests\teachers\UpdateTeacherRequest;

class AdminTeacherController extends Controller
{ 
    public $TeacherInterface;
    public function __construct(TeacherInterface $TeacherInterface )
    {
       $this->TeacherInterface=$TeacherInterface;
    }
    use ImagesTrait;
    public function index(){
      
        return $this->TeacherInterface->index();
       
    }
    public function create(){
       return $this->TeacherInterface->create();
    }
    public function store(AddTeacherRequest $request){
        return $this->TeacherInterface->store($request);
    }
    public function delete(DeleteTeacherRequest $request){
        return $this->TeacherInterface->Delete($request);
      }
      public function edit($teacherID){
        return $this->TeacherInterface->edit($teacherID);
          
      }
      public function update(UpdateTeacherRequest $request){
        return $this->TeacherInterface->update($request);
      }
}
 