<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    use HasFactory;
    protected $fillable =['name','description','price','img'];


      //straight relation ship have primary key 
    public function teacher (){
        return $this->hasOne(teacher::class,'course_id','id');

    }
    public function allTeachers(){
        return $this->hasMany(teacher::class,'course_id','id');
    }
    public function getImgAttribute($value){
        return 'images/course/'.$value;
    }


    public static function rules(){
        return[
            'name'          =>'required',
            'description'   =>'required|max:250',
            'price'         =>'required',
            
        ];
    }
    public static function deleteRules(){
        return['courseID'=>'required|exists:courses,id'];
    }
}
