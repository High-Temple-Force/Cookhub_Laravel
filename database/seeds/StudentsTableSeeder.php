<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $student = new \App\Student([
            'name' => '川端　康成',
            'email' => 'ys@exapmle.com',
            'tel' => '07040494949'
        ]);
        $student->save();
        
        $student = new \App\Student([
            'name' => '太宰治',
            'email' => 'os@exapmle.com',
            'tel' => '07040394949'
        ]);
        $student->save();
        $student = new \App\Student([
            'name' => '菊池寛',
            'email' => 'kn@exapmle.com',
            'tel' => '09040494949'
        ]);
        $student->save();

    }
}
