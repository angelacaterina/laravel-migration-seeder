<?php

use App\SchoolClass;
use Illuminate\Database\Seeder;

class SchoolClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $class_list = [
            [
                'name' => '1a',
                'description' => 'sala bar',
            ],
            [
                'name' => '1b',
                'description' => 'cucina',
            ],
            [
                'name' => '1c',
                'description' => 'ricevimento',
            ],
        ];
        
        foreach ($class_list as $class) {
            # code...
            $newClass = new SchoolClass();
            $newClass->name = $class['name'];
            $newClass->description = $class['description'];
            $newClass->save();
        }
    }
}
