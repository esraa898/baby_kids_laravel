<?php

namespace App\Http\Controllers\Admin;

use App\Models\contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Contacts\AddContactRequest;
use App\Http\Requests\Contacts\DeleteContactRequest;
use App\Http\Requests\Contacts\UpdateContactRequest;
use Symfony\Component\HttpKernel\EventListener\AddRequestFormatsListener;

class AdminContactsController extends Controller
{
  public function create(){
      return view('admin.contacts.create');
  }


  public function store(AddContactRequest $request){
    contact::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'message'=>$request->message
    ])  ;
    Alert::success('Success Title', 'Contact added ');
    return redirect(route('admin.contacts.all'));

  }
  public function index(){
      $contacts =contact::get();
      return view('admin.contacts.allcontact',compact('contacts'));
  }

  public function delete(DeleteContactRequest $request){
      contact::find($request->contactID)->delete();
      Alert::success('Success Title', 'Contact deleted');
      return redirect()->back();
  }

  public function edit($contactID){
    $contact= contact::find($contactID);
    return view('admin.contacts.edit',compact('contact'));
  }

  public function update(UpdateContactRequest $request){
      $contact= contact::find($request->contactID);
     $contact->update([
          'name'=> $request->name,
          'email'=>$request->email,
          'message'=> $request->message
      ]);
      Alert::success('Success Title', 'Contact updated');
      return redirect(route('admin.contacts.all'));

  }
}
