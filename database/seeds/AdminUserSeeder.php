<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Group;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Group::where('name', 'admin')->first();

        $user_email = 'admin@suuma.com.mx';
        $password = '_4dm1n_Suuma_';

        $user = new User();
        $user->email = $user_email;
        $user->password = bcrypt($password);
        $user->range = 'TAM';
        $user->check_privacy = 1;
        $user->isActive = 1;
        $user->first_time = 0;
        $user->instructor = 1;
        $user->service_chief = 1;
        $user->operator = 1;

        $user->save();

        $user->groups()->attach([
            $admin->id
        ]);

    }
}
