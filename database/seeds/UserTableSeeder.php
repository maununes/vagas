<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		User::create([
			'nome'=>'admin'
			,'email'=>'admin@admin.com'
			,'senha'=>bcrypt('1')
		]);
    }
}