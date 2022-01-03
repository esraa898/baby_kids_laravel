<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\AdminInterface;
use App\Http\Requests\CreateFaqRequest;
use App\Http\Requests\DeleteFaqRequest;
use App\Http\Requests\UpdateFaqRequest;


class AdminFaqController extends Controller
{

   public $AdminInterface;
   public function __construct(AdminInterface $AdminInterface )
   {
      $this->AdminInterface=$AdminInterface;
   }
   public function create(){
     return $this->AdminInterface->create();
   }
   public function store(CreateFaqRequest $request){
      return  $this->AdminInterface->store($request);
   }
   public function index(){
      return  $this->AdminInterface->index();
   }
   public function Delete(DeleteFaqRequest $request){
      return  $this->AdminInterface->Delete($request);
   }

   public function edit($faqID){
      return  $this->AdminInterface->edit($faqID);
   }
   public function update(UpdateFaqRequest $request){
      return  $this->AdminInterface->update($request);
   }
}
