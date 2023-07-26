<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
			[
				'name' => 'Asif Ahmed',
				'username' => 'superadmin',
				'email' => 'asifahmed.mist@gmail.com',
				'password' => bcrypt('superadmin123'),
				'role'	=> 'admin',
				'status' => 'active'
			],
			[
				'name' => 'Arshan Ahmed',
				'username' => 'arshan',
				'email' => 'arshanahmed@gmail.com',
				'password' => bcrypt('user1234'),
				'role'	=> 'user',
				'status' => 'active'
			]
		]);
    }
}
