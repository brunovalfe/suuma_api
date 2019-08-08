<?php

use App\Models\User;
use App\Models\Guard;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class PlacesInGuardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $guards = $this->getAllGuards();

        Log::info($guards);

//        foreach( $guards as $guard ){
//            $crew = $this->assignPeople();
//            if (isset($crew->operator)) {
//                $guard->guard_user()->attach($crew->operator, ['role' => 'operator', 'isActive' => 1]);
//            }
//            if (isset($crew->service_chief)) {
//                $guard->guard_user()->attach($crew->service_chief, ['role' => 'service_chief', 'isActive' => 1]);
//            }
//            foreach (range(0, count($crew->personal) - 1 ) as $person) {
//                $guard->guard_user()->attach($crew->personal[$person], ['role' => 'personal', 'isActive' => 1]);
//            }
//        }
    }

    private function assignPeople(){

        $total_users = [];
        $personal = [];
        $crew = (object)[];

        foreach ($this->getAllUsers() as $user) {
            array_push($total_users, $user->id);
        }

        $operators = $this->getOperators();
        $service_chiefs = $this->getServiceChief();


        if (rand(0,1) == 1) {
            $oid = $operators[rand(0, count($operators) - 1)];
            $total_users = array_values(array_filter($total_users, function($value) use ($oid) {
                return $value !== $oid;
            }));

            $crew->operator = $oid;
        }

        if (rand(0,1) == 1){
            $scid = $service_chiefs[rand(0, count($service_chiefs) - 1)];
            $total_users = array_values(array_filter($total_users, function($value) use ($scid) {
                return $value !== $scid;
            }));

            $crew->service_chief = $scid;
        }


        foreach (range(0,rand(1,2)) as $person ) {
            array_push( $personal, $total_users[rand(0, count($total_users) - 1)]);
        }

//        $crew = (object)
//        [
//            'operator' => $oid,
//            'service_chief' => $scid,
//            'personal' => $personal
//        ];

        $crew->personal = $personal;

        return $crew;

    }

    private function getOperators(){
        $operators = [];
        $users = User::where('operator',1)->get(['id']);
        foreach ($users as $user){
            array_push($operators, $user->id);
        }
        return $operators;
    }

    private function getServiceChief(){
        $service_chiefs = [];
        $users = User::where('service_chief', 1)->get(['id']);
        foreach ($users as $user){
            array_push($service_chiefs, $user->id);
        }
        return $service_chiefs;
    }

    private function getAllUsers() {
        return User::all(['id']);
    }

    private function getAllGuards(){
        return Guard::withCount('guard_user')->get()->values('guard_user_count');
    }

}
