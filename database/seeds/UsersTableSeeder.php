<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'account'    => 'tony',
            'password'   => bcrypt('password'),
            'email'      => 'tony@example.com',
            'first_name' => 'Tony',
            'last_name'  => 'Huang',
        ]);
    }
}
