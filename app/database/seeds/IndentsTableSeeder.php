<?php

class IndentsTableSeeder extends Seeder {

	public function run()
	{
		Indent::create([
			"task_id" => 1,
			"user_id" => 1
		]);

		Indent::create([
			"task_id" => 1,
			"user_id" => 1
		]);

		Indent::create([
			"task_id" => 2,
			"user_id" => 1
		]);
	}
}