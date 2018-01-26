<?php

use Illuminate\Database\Seeder;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        App\Admin::create([
//            'name'=>'admin',
//            'email'=>'admin@gmail.com',
//            'password'=>bcrypt('admin123'),
//            'job_title'=>'administrator'
//        ]);

        App\Admin::create([
            'name'=>'administrator',
            'email'=>'administrator@gmail.com',
            'password'=>bcrypt('123456'),
            'job_title'=>'administrator'
        ]);
    }
}


