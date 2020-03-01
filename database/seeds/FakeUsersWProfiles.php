<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;
use App\Models\Profile;
use App\Models\Group;

class FakeUsersWProfiles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_ES');
        foreach (range(1,30) as $index){
            $user = new User();
            $user->email = $faker->email;
            $user->password = bcrypt('secret');
            $user->range = 'TAM';
            $user->check_privacy = 1;
            $user->first_time = 0;
            $user->isActive = 1;
            $user->operator = random_int(0, 1);
            $user->service_chief = random_int(0, 1);
            $user->instructor = random_int(0, 1);
            $user->save();

            $profile = new Profile();
            $profile->name = $faker->firstName;
            $profile->appat = $faker->lastName;
            $profile->apmat = $faker->lastName;

            $user->profile()->save($profile);

            $basic_user = Group::where('name', 'basic')->first();
            $user->groups()->attach($basic_user->id);
        }
    }
}
