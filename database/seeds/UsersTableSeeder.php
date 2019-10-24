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
            'account'    => 'admin',
            'password'   => bcrypt('admin'),
            'email'      => 'admin@example.com',
            'first_name' => 'admin',
            'last_name'  => 'istrator',
        ]);
    }
}
