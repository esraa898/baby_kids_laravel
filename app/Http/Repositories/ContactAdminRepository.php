<?php
namespace App\Http\Repositories;




use App\Models\contact;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Interfaces\ContactInterface;


class ContactAdminRepository implements ContactInterface
{
   
  
    public function index(){
        $contacts =contact::get();
        return view('admin.contacts.allcontact',compact('contacts'));
    }
  
    public function delete( $request){
        contact::find($request->contactID)->delete();
        Alert::success('Success Title', 'Contact deleted');
        return redirect()->back();
    }
  
}