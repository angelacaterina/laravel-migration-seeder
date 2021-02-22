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
        $student_list = [
            [
                'name' => 'Pippo',
                'lastname' => 'Pluto',
            ],
            [
                'name' => 'Paperino',
                'lastname' => 'Gianmario',
            ],
            [
                'name' => 'Topolino',
                'lastname' => 'Stilton',
            ],
        ];

        // $category_list = config('cats');

        foreach ($student_list as $student) {
            # code...
            $newStudent = new Student();
            $newStudent->name = $student['name'];
            $newStudent->lastname = $student['lastname'];
            $newStudent->save();
        }
    }
}
