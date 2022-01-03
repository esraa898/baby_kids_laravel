<?php

namespace App\Http\Controllers\Admin;

use App\Http\Traits\ImagesTrait;
use App\Http\Controllers\Controller;
use App\Http\Interfaces\AdminInterface;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Activity\CreateActivityRequest;
use App\Http\Requests\Activity\DeleteActivityRequest;
use App\Http\Requests\Activity\UpdateActivityRequest;



class AdminActivityController extends Controller
{
   public $AdminInterface;
    public function __construct(AdminInterface $AdminInterface)
    {
     $this->AdminInterface=$AdminInterface;   
    }
    use ImagesTrait;
    public function create(){

          return $this->AdminInterface->create(); 
    }

   /**
    * Undocumented function
    *
    * @param CreateActivityRequest $request
    * @return void
    *name img file 
    *save it in project
    *store data in db 
    *return
    */
    public function store(CreateActivityRequest $request){
        return $this->AdminInterface->store($request);
    }
    public function index(){
        return $this->AdminInterface->index();
    }
    public function delete(DeleteActivityRequest $request){
        return $this->AdminInterface->delete($request);

    }
    public function edit($activityID){
        return $this->AdminInterface->edit($activityID);
    }
  
    
      /**
       * Undocumented function
       *
       * @param UpdateActivityRequest $request
       * @return void
       * find data
       * upload file name
       * delete old file 
       * update data
       */
    public function update(UpdateActivityRequest $request){
        return $this->AdminInterface->update($request);
    }
}
