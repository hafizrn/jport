<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Usersseeder extends Seeder
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
            'name' => 'Ma. Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('444444'),
        ]);
        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Ma. Author',
            'email' => 'author@admin.com',
            'password' => bcrypt('333333'),
        ]);
        DB::table('users')->insert([
            'role_id' => '3',
            'name' => 'Ma. Employer',
            'email' => 'employer@admin.com',
            'password' => bcrypt('222222'),
        ]);
        DB::table('users')->insert([
            'role_id' => '4',
            'name' => 'Ma. user',
            'email' => 'user@admin.com',
            'password' => bcrypt('111111'),
        ]);
    }
}
