<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;
    protected $fillable=['name','email','message'];

    public static function rules(){

        return[
            'name'=>'required',
            'email'=>'required|email|',
            'message'=>'required|max:250'
        ];
    }
    public static function deleteRules(){
        return[
            'contactID'=>'required|exists:contacts,id'
        ];
    }
}
