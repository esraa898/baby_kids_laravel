<?php

namespace App\Http\Controllers\Admin;

use App\Models\teacher;
use Illuminate\Http\Request;
use App\Http\Traits\ImagesTrait;
use App\Http\Controllers\Controller;
use App\Http\Interfaces\AdminInterface;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\teachers\AddTeacherRequest;
use App\Http\Requests\teachers\DeleteTeacherRequest;
use App\Http\Requests\teachers\UpdateTeacherRequest;

class AdminTeacherController extends Controller
{ 
    public $AdminInterface;
    public function __construct(AdminInterface $AdminInterface )
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
    public function store(AddTeacherRequest $request){
        return $this->AdminInterface->store($request);
    }
    public function delete(DeleteTeacherRequest $request){
        return $this->AdminInterface->Delete($request);
      }
      public function edit($teacherID){
        return $this->AdminInterface->edit($teacherID);
          
      }
      public function update(UpdateTeacherRequest $request){
        return $this->AdminInterface->update($request);
      }
}
 