<?php

use App\Models\Group;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;
use App\Models\User;

class FixAllUsersWithoutPermissions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $basic = Group::where('name', 'basic')->first();

        $users = User::all();
        foreach ($users as $user) {
            if (count($user->groups) == 0) {
                $user->groups()->sync($basic);
            }
        }
    }
}
