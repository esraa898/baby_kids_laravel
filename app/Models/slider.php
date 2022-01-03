<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    use HasFactory;
    protected $fillable =['img'];

    public static function rules(){
        return [
       'image'=>'required'
        ];
    }

    public function getImgAttribute($value)
    {
         return 'images/slider/'.$value;
    }


    public  static function deleteRules(){
      
        return[
            'sliderID' =>'required|exists:sliders,id'
        ];
    
    }
}
