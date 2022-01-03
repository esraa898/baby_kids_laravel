<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    use HasFactory;
    protected $fillable =['name','description','img','course_id'];


    //reversed relationship have foregin key 
    public function course(){
      return   $this->belongsTo(course::class,'course_id','id');
    }
    public function getImgAttribute($value){
        return 'images/teacher/'.$value;
    }


    public static function rules(){
        return[
            'name'          =>'required',
            'description'   =>'required|max:250',
            
            
        ];
    }
    public static function deleteRules(){
        return['teacherID'=>'required|exists:teachers,id'];
    }
}
