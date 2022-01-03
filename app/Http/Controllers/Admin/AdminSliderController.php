<?php

namespace App\Http\Controllers\Admin;

use App\Http\Traits\ImagesTrait;
use App\Http\Controllers\Controller;
use App\Http\Interfaces\AdminInterface;
use App\Http\Requests\Slider\AddSliderRequest;
use App\Http\Requests\slider\DeleteSliderRequest;
use App\Http\Requests\slider\UpdateSliderRequest;

class AdminSliderController extends Controller
{
    
   public $AdminInterface;
   public function __construct(AdminInterface $AdminInterface )
   {
      $this->AdminInterface=$AdminInterface;
   }
    use ImagesTrait;
    public function create(){
       return $this->AdminInterface->create();
    }

    public function store(AddSliderRequest $request){
        return $this->AdminInterface->store($request);

       
    }
    public function index(){

        return $this->AdminInterface->index();
    }
    public function delete(DeleteSliderRequest $request){

        return $this->AdminInterface->Delete($request);
    }
    public function edit($sliderID){
        return $this->AdminInterface->edit($sliderID);
    }

  
    public function update(UpdateSliderRequest $request){
        return $this->AdminInterface->update($request);
    }
}
