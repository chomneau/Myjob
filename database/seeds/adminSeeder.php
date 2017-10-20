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
        App\Admin::create([
            'name'=>'admin',
            'email'=>'menchomneau@gmail.com',
            'password'=>bcrypt('admin123'),
            'job_title'=>'administrator'
        ]);
    }
}
