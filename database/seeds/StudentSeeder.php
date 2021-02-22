<?php

use App\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $student_list = config('stud');

        foreach ($student_list as $student) {
            # code...
            $newStudent = new Student();
            $newStudent->name = $student['name'];
            $newStudent->lastname = $student['lastname'];
            $newStudent->save();
        }
    }
}
