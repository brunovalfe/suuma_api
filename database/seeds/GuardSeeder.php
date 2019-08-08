<?php

use Illuminate\Database\Seeder;
use App\Models\Guard;
use App\Models\User;
use App\Models\Unit;
use Illuminate\Support\Facades\Log;

class GuardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seedGuard();
    }

    private function seedGuard(){

        date_default_timezone_set('America/Mexico_City');
        $userAdmin = User::where('email', 'dante@gmail.com')->first();
        $ambulance = Unit::find(2);

        foreach (range(0,20) as $more) {
            $g = new Guard();

            $d = new DateTime();
            $d->modify('+'.(string)$more.' day');
            $d_s = $d->format('Y/m/d');
            $t_s = $d->format('H:i:s');

            $guardOrEvent = ['event', 'guard'];

            $g->date = $d_s;
            $g->hour = $t_s;
            $g->duration = 2;
            $g->max_quota = 5;
            $g->type = $guardOrEvent[rand(0,1)];
            $g->description = 'Faker #' . $more;
            $g->isActive = 1;

            $g->unit()->associate($ambulance);
            $g->user()->associate($userAdmin);

            $g->save();

        }

    }

}
