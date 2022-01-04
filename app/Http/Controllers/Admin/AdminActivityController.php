<?php

namespace App\Http\Controllers\Admin;

use App\Http\Traits\ImagesTrait;
use App\Http\Controllers\Controller;
use App\Http\Interfaces\ActivityInterface;

use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Activity\CreateActivityRequest;
use App\Http\Requests\Activity\DeleteActivityRequest;
use App\Http\Requests\Activity\UpdateActivityRequest;



class AdminActivityController extends Controller
{
   public $ActivityInterface;
    public function __construct(ActivityInterface $ActivityInterface)
    {
     $this->ActivityInterface=$ActivityInterface;   
    }
    use ImagesTrait;
    public function create(){

          return $this->ActivityInterface->create(); 
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
        return $this->ActivityInterface->store($request);
    }
    public function index(){
        return $this->ActivityInterface->index();
    }
    public function delete(DeleteActivityRequest $request){
        return $this->ActivityInterface->delete($request);

    }
    public function edit($activityID){
        return $this->ActivityInterface->edit($activityID);
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
        return $this->ActivityInterface->update($request);
    }
}
