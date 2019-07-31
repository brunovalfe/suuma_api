<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Group;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $basic_user = Group::where('name', 'basic')->first();
        foreach ($users as $user){
            $user->groups()->attach($basic_user->id);
        }

        // Admin with admin powers
        $admin = User::where('email', 'admin@suuma.com.mx')->first();
        $admin_role = Group::where('name', 'admin')->first;
        $admin->groups()->attach($admin_role->id);
    }
}
