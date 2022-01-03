<?php

namespace Database\Seeders;

use App\Models\teacher;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teachers=[
            ['name'=>'mohamed' , 'description'=>'math teacher','image'=> 'mohamed.png','course_id'=>1],
            ['name'=>'salma', 'description'=>'scienceteacher', 'image'=> 'salma.png','course_id'=>2],
            ];
            foreach ($teachers as $teacher){
                teacher::create([
                    'name'=> $teacher['name'],
                    'description'=> $teacher['description'],
                
                    'img'=>$teacher['image'],
                    'course_id'=>$teacher['course_id']
                ])    ;
                }
    }
}
