<?php

namespace App\Http\Controllers\Admin;

use App\Http\Traits\ImagesTrait;
use App\Http\Controllers\Controller;
use App\Http\Interfaces\SliderInterface;
use App\Http\Requests\Slider\AddSliderRequest;
use App\Http\Requests\slider\DeleteSliderRequest;
use App\Http\Requests\slider\UpdateSliderRequest;

class AdminSliderController extends Controller
{
    
   public $SliderInterface;
   public function __construct(SliderInterface $SliderInterface )
   {
      $this->SliderInterface=$SliderInterface;
   }
    use ImagesTrait;
    public function create(){
       return $this->SliderInterface->create();
    }

    public function store(AddSliderRequest $request){
        return $this->SliderInterface->store($request);

       
    }
    public function index(){

        return $this->SliderInterface->index();
    }
    public function delete(DeleteSliderRequest $request){

        return $this->SliderInterface->Delete($request);
    }
    public function edit($sliderID){
        return $this->SliderInterface->edit($sliderID);
    }

  
    public function update(UpdateSliderRequest $request){
        return $this->SliderInterface->update($request);
    }
}
