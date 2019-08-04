<?php

use Illuminate\Database\Seeder;
use App\Models\Unit;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $one = new Unit();
        $one->unit_name = 'IB-03';
        $one->name = 'Chenta';
        $one->year = '2001';
        $one->license_plate = 'KX-09-601';
        $one->model = 'Express Van 3500';
        $one->type = '2';
        $one->policy_key = 'D00-1-2-000415836_00';
        $one->wheel_type = 'LT245-75R16';
        $one->card_number = '2602737';
        $one->isActive = 0;

        $two = new Unit();
        $two->unit_name = 'IB-04';
        $two->name = 'Gloria';
        $two->year = '2011';
        $two->license_plate = 'AA564';
        $two->model = 'Express 3500 Cutaway';
        $two->type = '3';
        $two->policy_key = 'Seguros Ana 1569579';
        $two->wheel_type = 'LT245/75R16';
        $two->card_number = '3-0001108';
        $two->isActive = 1;

        $three = new Unit();
        $three->unit_name = 'IB-05';
        $three->name = 'María';
        $three->year = '2015';
        $three->license_plate = 'X';
        $three->model = 'X';
        $three->type = 'X';
        $three->policy_key = 'X';
        $three->wheel_type = 'X';
        $three->card_number = 'X';
        $three->isActive = 1;

        $one->save();
        $two->save();
        $three->save();

    }
}
