<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);

	    $user = new User();
		$user->name = 'Admin';
		$user->email = 'admin@local.com';
		$user->password = Hash::make('123456');
	    $user->save();
        Model::reguard();
    }
}
