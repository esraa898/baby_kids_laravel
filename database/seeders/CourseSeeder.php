<?php

namespace Database\Seeders;

use App\Models\course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses=[
        ['name'=>'coursephp' , 'description'=>'phpcourse','price'=>'1000','image'=> 'php.png'],
        ['name'=>'courseasp', 'description'=>'aspcourse','price'=>'6600', 'image'=> 'asp.png'],
        ];
        foreach ($courses as $course){
            course::create([
                'name'=> $course['name'],
                'description'=> $course['description'],
                'price'=> $course['price'],
            
                'img'=>$course['image']
            ])    ;
            }
    }
}
