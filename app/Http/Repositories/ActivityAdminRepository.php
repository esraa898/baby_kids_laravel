<?php
namespace App\Http\Repositories;

use App\Http\Interfaces\ActivityInterface;
use App\Models\activity;
use App\Http\Traits\ImagesTrait;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Interfaces\AdminInterface;

class ActivityAdminRepository implements ActivityInterface
{
   
    use ImagesTrait; 
    public $activity;
    public $alert;
   public function __construct(activity $activity ,Alert $alert)
   {
    $this->activity=$activity; 
    $this->alert=$alert; 
   }
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
    public function store( $request){
           $fileName= time().'_activity.png';
           $this->uploadImage($request->icon,$fileName,'activity');
           $this->activity::create([
               'title'=>$request->title,
               'slug'=>$request->slug,
               'icon'=>$fileName
           ]);
           $this->alert::success('Success Title', 'Activity created');
           return redirect(route('admin.activity.all'));
           
    }
    public function index(){
      $activites=    $this->activity::get();
        return view('admin.activites.allactivites',compact('activites'));
    }
    public function delete( $request){
       $activity=   $this->activity::find($request->activityID);
       unlink(public_path($activity->icon));
       $activity->delete();
       $this->alert::success('Success Title', 'ActivityDeleted');
       return redirect()->back();

    }
    public function edit($activityID){
        $activity=   $this->activity::find($activityID);

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
    public function update( $request){
        $activity =  $this->activity::find($request->activityID);
        
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
      
        $this->alert::success('Success Title', 'Activity Updated');
        return redirect(route('admin.activity.all'));

    }
}