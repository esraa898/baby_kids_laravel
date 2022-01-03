<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activity extends Model
{
    use HasFactory;

    protected $fillable= ['title','slug','icon'];
    

 
    public function getIconAttribute($value){
        return 'images/activity/'.$value;

    }
    public static function rules (){

        return[
            'title'=>'required',
            'slug'=>'required|min:6',
        ];
    }
    public static function deleteRules(){
        return['activityId'=>'exists:activity,id'];
    }
}
