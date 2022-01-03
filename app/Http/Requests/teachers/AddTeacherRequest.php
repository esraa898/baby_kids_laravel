<?php

namespace App\Http\Requests\teachers;

use App\Models\teacher;
use Illuminate\Foundation\Http\FormRequest;

class AddTeacherRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return array_merge(teacher::rules(),[
            'image'         =>'required',
            'course_id'     =>'required',]) ;
    }
}
