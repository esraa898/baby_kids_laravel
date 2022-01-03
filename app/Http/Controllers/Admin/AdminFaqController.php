<?php

namespace App\Http\Controllers\Admin;

use App\Models\faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\CreateFaqRequest;
use App\Http\Requests\DeleteFaqRequest;
use App\Http\Requests\UpdateFaqRequest;
use RealRashid\SweetAlert\Facades\Alert;

class AdminFaqController extends Controller
{
   public function create(){
    return view('Admin.faq.create');
   }

  /**
   *
   * @param Request $request
   * @return void
   * 1-store data .
   * 2- return. 
   */
   public function store(CreateFaqRequest $request){

      faq::create([
         'question'=>$request->question,
         'answer'=>$request->answer
      ]);
      Alert::success('Success Title', 'faq was created ');
      return redirect()->back();


   }

   public function index()
   {
     $faqs= faq::get();
      return view('Admin.faq.allfaq',compact('faqs'));
   }

 public function Delete(DeleteFaqRequest $request)
   {
      faq::where('id',$request->faqID)->delete();
      Alert::success('Success Title', 'faq was Deleted ');
      return redirect()->back();
   }
   public function edit($faqID){
    $faq=  faq::find($faqID);
      return view('Admin.faq.edit',compact('faq'));
   }
   /**
    * Undocumented function
    *
    * @param UpdateFaqRequest $request
    *1- get data 
    *2-update
    *3-fire alert 
    *4-return 
    */
   public function update(UpdateFaqRequest $request){
      $faq= faq::find($request->faqID);
      $faq->update([
         'question' =>$request->question,
         'answer'=>$request->answer
      ]);
      Alert::success('Success Title', 'faq was updated');
      return redirect(route('admin.faq.all'));

   }
}
