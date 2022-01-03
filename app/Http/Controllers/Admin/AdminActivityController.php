<?php

namespace App\Http\Controllers\Admin;

use App\Models\activity;
use Illuminate\Http\Request;
use App\Http\Traits\ImagesTrait;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Activity\CreateActivityRequest;
use App\Http\Requests\Activity\DeleteActivityRequest;
use App\Http\Requests\Activity\UpdateActivityRequest;

use function PHPUnit\Framework\isNull;

class AdminActivityController extends Controller
{

    use ImagesTrait;
    public function create(){

        return view('admin.activites.create');
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
           $fileName= time().'_activity.png';
           $this->uploadImage($request->icon,$fileName,'activity');
           activity::create([
               'title'=>$request->title,
               'slug'=>$request->slug,
               'icon'=>$fileName
           ]);
           Alert::success('Success Title', 'Activity created');
           return redirect(route('admin.activity.all'));
           
    }
    public function index(){
      $activites=  activity::get();
        return view('admin.activites.allactivites',compact('activites'));
    }
    public function delete(DeleteActivityRequest $request){
       $activity= activity::find($request->activityID);
       unlink(public_path($activity->icon));
       $activity->delete();
       Alert::success('Success Title', 'ActivityDeleted');
       return redirect()->back();

    }
    public function edit($activityID){
        $activity= activity::find($activityID);

        return view('admin.activites.edit',compact('activity'));

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
        $activity =activity::find($request->activityID);
        
        if($request->has('icon'))
        {
        $fileName=time().'_activity.png';
        $this->uploadImage($request->icon,$fileName,'activity',$activity->icon);
        }
        $activity->update([
            'title'   =>$request->title
            ,'slug'   =>$request->slug,
            'icon'    =>(isset($fileName)) ? $fileName : $activity->getRawOriginal('icon')
        ]);
      
        Alert::success('Success Title', 'Activity Updated');
        return redirect(route('admin.activity.all'));

    }
}
