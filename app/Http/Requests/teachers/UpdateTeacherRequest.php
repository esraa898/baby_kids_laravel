<?php

namespace App\Http\Requests\teachers;

use App\Models\teacher;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTeacherRequest extends FormRequest
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
        return array_merge(teacher::rules(),['teacherID'=>'required|exists:teachers,id'
    ,"course_id"=>'exists:courses,id']);
    }
}
