<?php
namespace App\Http\Repositories;

use App\Models\faq;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Interfaces\FaqInterface;

class FaqAdminRepository implements FaqInterface
{
    public $faq;
    public $alert;
   public function __construct(faq $faq ,Alert $alert)
   {
    $this->faq=$faq; 
    $this->alert=$alert; 
   }
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
       public function store( $request){
    
         $this->faq::create([
             'question'=>$request->question,
             'answer'=>$request->answer
          ]);
          $this->alert::success('Success Title', 'faq was created ');
          return redirect()->back();
    
    
       }
    
       public function index()
       {
         $faqs= $this->faq::get();
          return view('Admin.faq.allfaq',compact('faqs'));
       }
    
     public function Delete( $request)
       {
         $this->faq::where('id',$request->faqID)->delete();
         $this->alert::success('Success Title', 'faq was Deleted ');
          return redirect()->back();
       }
       public function edit($faqID){
        $faq=  $this->faq::find($faqID);
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
       public function update( $request){
          $faq= $this->faq::find($request->faqID);
          $faq->update([
             'question' =>$request->question,
             'answer'=>$request->answer
          ]);
          $this->alert::success('Success Title', 'faq was updated');
          return redirect(route('admin.faq.all'));
    
       }
}