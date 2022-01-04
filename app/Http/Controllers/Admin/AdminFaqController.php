<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;;
use App\Http\Interfaces\FaqInterface;
use App\Http\Requests\CreateFaqRequest;
use App\Http\Requests\DeleteFaqRequest;
use App\Http\Requests\UpdateFaqRequest;


class AdminFaqController extends Controller
{

   public $FaqInterface;
   public function __construct(FaqInterface $FaqInterface )
   {
      $this->FaqInterface=$FaqInterface;
   }
   public function create(){
     return $this->FaqInterface->create();
   }
   public function store(CreateFaqRequest $request){
      return  $this->FaqInterface->store($request);
   }
   public function index(){
      return  $this->FaqInterface->index();
   }
   public function Delete(DeleteFaqRequest $request){
      return  $this->FaqInterface->Delete($request);
   }

   public function edit($faqID){
      return  $this->FaqInterface->edit($faqID);
   }
   public function update(UpdateFaqRequest $request){
      return  $this->FaqInterface->update($request);
   }
}
