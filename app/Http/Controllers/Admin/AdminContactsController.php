<?php

namespace App\Http\Controllers\Admin;

use App\Models\contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Interfaces\ContactInterface;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\Contacts\AddContactRequest;
use App\Http\Requests\Contacts\DeleteContactRequest;
use App\Http\Requests\Contacts\UpdateContactRequest;
use Symfony\Component\HttpKernel\EventListener\AddRequestFormatsListener;

class AdminContactsController extends Controller
{
    public $ContactInterface;
    public function __construct(ContactInterface $ContactInterface )
    {
       $this->ContactInterface=$ContactInterface;
    }

  public function index(){
     return $this->ContactInterface->index();
  }
  public function delete(DeleteContactRequest $request){
     return  $this->ContactInterface->Delete($request);
  }



 
}
