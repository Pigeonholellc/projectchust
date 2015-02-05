<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder {

	public function run() {

		//Add the master administrator, user id of 1
		DB::table(Config::get('auth.table'))->truncate();

		$user = array(
			'name' => 'Mark Everhart',
			'email' => 'mark@pigeonholellc.com',
			'password' => Hash::make('7037771749'),
			'created_at' => Carbon\Carbon::now(),
			'updated_at' => Carbon\Carbon::now()
		);

		DB::table(Config::get('auth.table'))->insert($user);
	}
}