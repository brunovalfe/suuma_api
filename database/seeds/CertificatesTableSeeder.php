<?php

use Illuminate\Database\Seeder;
//use Faker\Factory as Faker;
use App\Models\User;
use App\Models\Certificate;
//use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Log;

class CertificatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(0,15)as $index) {
            $user = User::inRandomOrder()->first();
            $d = new DateTime();
            $certificate = new Certificate();
            $certificate->nombre_curso = 'Curso';
            $certificate->tipo = 'TIPO';
            $certificate->fecha_ac = $d->format('Y/m/d');
            $certificate->duracion = random_int(1, 2);
            $d->modify("+ $certificate->duracion years");
            $certificate->fecha_cad = $d->format('Y/m/d');
            //$certificate->fecha_cad = $d('Y/m/d',strtotime("+ $certificate->duracion years"));
            $certificate->observaciones = 'observaciones'; //= 'Faker #' . $more;
            $certificate->estado_solicitud = random_int(0, 3);
            $certificate->file = 'archivo';

            //$user->certificates()->associate($certificate);
            $certificate->user()->associate($user);
            $certificate->save();
        }
    }
}
