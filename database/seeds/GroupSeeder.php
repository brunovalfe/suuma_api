<?php

use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
            [
               'name' => 'basic',
               'description' => 'Tiene los permisos basicos del sistema (TAMP, CP)'
            ],
            [
               'name' => 'service_chief',
               'description' => 'Jefe de Servicio'
            ],
            [
                'name' => 'operator',
                'description' => 'Operador'
            ],
            [
                'name' => 'training',
                'description' => 'Capacitación'
            ],
            [
                'name' => 'director',
                'description' => 'Director'
            ],
            [
                'name' => 'operational_director',
                'description' => 'Director de Operacional'
            ],
            [
                'name' => 'operational_personel',
                'description' => 'Director de Personal'
            ],
            [
                'name' => 'admin',
                'description' => 'Administrador'
            ]
        ]);
    }
}
