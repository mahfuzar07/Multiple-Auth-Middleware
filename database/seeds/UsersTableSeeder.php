<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'role_id' => '1',
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin12345'),
        ]);
        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Mahfuzar Rahman',
            'email' => 'mahfuzar@gmail.com',
            'password' => Hash::make('mahfuzar'),
        ]);
    }
}
