<?php 
namespace App\Http\Interfaces;



interface CourseInterface
{
  public function index();
  public function create();
  public function store($request);
  public function edit ($request);
  public function Delete( $request);
  public function update($request); 
  
}