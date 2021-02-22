<?php

use App\Course;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for ($i=0; $i < 10; $i++) { 
            # code...
            $newCourse = new Course();
            $newCourse->name = $faker->word();
            $newCourse->description = $faker->paragraph(6);
            $newCourse->save();
        }
    }
}
