<?php


class UsersTableSeeder extends Seeder {

	public function run()
	{
		

		DB::table('users')->delete();

		User::create([
			'email' => 'admin@sklaravel.com',
			'password' => Hash::make('admin')
			]);

		User::create([
			'email' => 'user@sklaravel.com',
			'password' => Hash::make('user')
			]);
	}

}