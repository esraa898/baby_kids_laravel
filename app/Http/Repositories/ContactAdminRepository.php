<?php
namespace App\Http\Repositories;




use App\Models\contact;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Interfaces\ContactInterface;


class ContactAdminRepository implements ContactInterface
{
   
    public $contact;
    public $alert;
   public function __construct(contact $contact ,Alert $alert)
   {
    $this->contact=$contact; 
    $this->alert=$alert; 
   }
    public function index(){
        $contacts = $this->contact::get();
        return view('admin.contacts.allcontact',compact('contacts'));
    }
  
    public function delete( $request){
        $this->contact::find($request->contactID)->delete();
        $this->alert::success('Success Title', 'Contact deleted');
        return redirect()->back();
    }
  
}