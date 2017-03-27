<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\Admin([
            'username' => 'admin',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        $admin->save();
    }
}
