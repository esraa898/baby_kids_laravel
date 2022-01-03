<?php

namespace App\Http\Controllers\Admin;

use App\Models\slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Slider\AddSliderRequest;
use App\Http\Requests\slider\DeleteSliderRequest;
use App\Http\Requests\slider\UpdateSliderRequest;
use App\Http\Traits\ImagesTrait;

class AdminSliderController extends Controller
{
    use ImagesTrait;
    public function create(){
        return view('admin.slider.create');
    }

    public function store(AddSliderRequest $request){


        $filename= time().'_slider.png';

        $this->uploadImage($request->image ,$filename, 'slider');
       slider::create([
           'img' => $filename
       ]);
       Alert::success('Success Title', 'slider created');
     return redirect()->back();
    }
    public function index(){

       $sliders= slider::get();
        return view('admin.slider.allsliders',compact('sliders'));
    }
    public function delete(DeleteSliderRequest $request){

       $slider= slider::find($request->sliderID);
       unlink(public_path($slider->img));
       $slider->delete();
       Alert::success('Success Title', 'slider deleted  ');
       return redirect()->back();
      
    }
    public function edit($sliderID){
        $slider= slider::find($sliderID);
        return view('admin.slider.edit',compact('slider'));
    }
    /**
     * Undocumented function
     *
     * @param UpdateSliderRequest $request
     * @return void
     * uploadName file
     * delete old file 
     * update new file name 
     * 
     */
    public function update(UpdateSliderRequest $request){
       $slider= slider::find($request->sliderID); 
          $fileName= time().'_slider.png';
          $this->uploadImage($request->image,$fileName,'slider',$slider->img) ;
          $slider->update([
              'img'=>$fileName
          ]);
          Alert::success('Success Title', 'slider was updated   ');
          return redirect(route('admin.slider.all'));
    }
}
