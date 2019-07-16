<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Group;
use App\Models\Action;

class ActionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_types = ['basic', 'service_chief', 'operator',
            'training', 'director', 'operational_director', 'operational_personel',
            'admin'];

        $actions = (object) [
            'admin' => [
                [
                    'name' => 'Everything',
                    'permission' => '*',
                    'resource' => '*',
                    'description' => 'Un administrador puede hacer todo'
                ]
            ],
            'basic' => [
                [
                    'name' => 'Apartar guardia',
                    'permission' => 'REQUEST',
                    'resource' => 'guard|self',
                    'description' => 'El alcance solo es hacia la guardia a la que pertenece'
                ],
                [
                    'name' => 'Cancelar guardia',
                    'permission' => 'CANCEL',
                    'resource' => 'guard|self',
                    'description' => 'Solo puede cancelar en ciertas circunstancias'
                ],
                [
                    'name' => 'Subir certificados',
                    'permission' => 'UPLOAD',
                    'resource' => 'certificate|self',
                    'description' => 'Puede subir certificados propios'
                ],
                [
                    'name' => 'Mail de confirmacion',
                    'permission' => 'MAIL',
                    'resource' => 'guard|self',
                    'description' => 'Indica si se envia correo de confirmacion'
                ]
            ],
            'service_chief' => [
                [
                    'name' => 'Mail con resumen tripulacion',
                    'permission' => 'MAIL',
                    'resource' => 'guard|crew',
                    'description' => 'Indica si mandar mail al usuario sobre el total de la tripulacion'
                ]
            ],
            'operator' => [
                [
                    'name' => 'Mail con resumen tripulacion',
                    'permission' => 'MAIL',
                    'resource' => 'guard|crew',
                    'description' => 'Indica si mandar mail al usuario sobre el total de la tripulacion'
                ],
                [
                    'name' => 'Leer documentos de operacion',
                    'permission' => 'READ',
                    'resource' => 'operational_documents',
                    'description' => 'Visibilidad de Documentos Operativo'
                ]
            ],
            'training' => [
                [
                    'name' => 'Mail con resumen tripulacion',
                    'permission' => 'MAIL',
                    'resource' => 'guard|crew',
                    'description' => 'Indica si mandar mail al usuario sobre el total de la tripulacion'
                ],
                [
                    'name' => 'Aprobar certificados',
                    'permission' => 'APRROVE',
                    'resource' => 'certificate|all',
                    'description' => 'Puede aprobar certificados de los usarios'
                ],
                [
                    'name' => 'Publicar noticias',
                    'permission' => 'PUBLISH',
                    'resource' => 'news',
                    'description' => 'Publicacion de noticias'
                ],
                [
                    'name' => 'Subir documentos',
                    'permission' => 'UPLOAD',
                    'resource' => 'general_documents',
                    'description' => 'Subir documentos al archivo general'
                ],
                [
                    'name' => 'Leer puntos de recertificacion',
                    'permission' => 'READ',
                    'resource' => 'certification_points|all',
                    'description' => 'Visualizar los puntos de receritificacion de todos'
                ],
                [
                    'name' => 'Editar puntos de recertificacion',
                    'permission' => 'UPDATE',
                    'resource' => 'certification_points|all',
                    'description' => 'Editar puntos de recertificacion de usuarios'
                ]
            ],
            'director' => [
                [
                    'name' => 'Publicar noticias',
                    'permission' => 'PUBLISH',
                    'resource' => 'news',
                    'description' => 'Publicacion de noticias'
                ],
                [
                    'name' => 'Subir documentos',
                    'permission' => 'UPLOAD',
                    'resource' => 'general_documents',
                    'description' => 'Subir documentos al archivo general'
                ]
            ],
            'operational_personel' => [
                [
                    'name' => 'Mail con resumen tripulacion',
                    'permission' => 'MAIL',
                    'resource' => 'guard|crew',
                    'description' => 'Indica si mandar mail al usuario sobre el total de la tripulacion'
                ],
                [
                    'name' => 'Publicar noticias',
                    'permission' => 'PUBLISH',
                    'resource' => 'news',
                    'description' => 'Publicacion de noticias'
                ],
                [
                    'name' => 'Generar reportes de Guardias',
                    'permission' => 'READ',
                    'resource' => 'guard|all',
                    'description' => 'Obtener info directamente de la db'
                ],
                [
                    'name' => 'Leer info de servicio',
                    'permission' => 'READ',
                    'resource' => 'service|all',
                    'description' => 'Obtener info directamente de la db de servicios'
                ],
                [
                    'name' => 'Crear registros de servicio',
                    'permission' => 'CREATE',
                    'resource' => 'service|all',
                    'description' => 'Insertar info directamente de la db de servicios'
                ]
            ],
            'operational_director' => [
                [
                    'name' => 'Crear guardia',
                    'permission' => 'CREATE',
                    'resource' => 'guard|all',
                    'description' => 'Crear una guardia'
                ],
                [
                    'name' => 'Modificar guardia',
                    'permission' => 'UPDATE',
                    'resource' => 'guard|all',
                    'description' => 'Modificar * de una guardia'
                ],
                [
                    'name' => 'Borrar guardia',
                    'permission' => 'DELETE',
                    'resource' => 'guard|all',
                    'description' => 'Borrar una guardia'
                ],
                [
                    'name' => 'Publicar noticias',
                    'permission' => 'PUBLISH',
                    'resource' => 'news',
                    'description' => 'Publicacion de noticias'
                ],
                [
                    'name' => 'Subir documentos',
                    'permission' => 'UPLOAD',
                    'resource' => 'general_documents',
                    'description' => 'Subir documentos al archivo general'
                ],
                [
                    'name' => 'Generar reportes de Guardias',
                    'permission' => 'READ',
                    'resource' => 'guard|all',
                    'description' => 'Obtener info directamente de la db'
                ],
                [
                    'name' => 'Leer info de servicio',
                    'permission' => 'READ',
                    'resource' => 'service|all',
                    'description' => 'Obtener info directamente de la db de servicios'
                ],
                [
                    'name' => 'Crear registros de servicio',
                    'permission' => 'CREATE',
                    'resource' => 'service|all',
                    'description' => 'Insertar info directamente de la db de servicios'
                ]
            ]

        ];

        foreach ($user_types as $user){
            $group = Group::where('name', $user)->first();
            $actions_group = [];
            foreach ($actions as $action_name) {
                foreach ($action_name as $item) {
                    $action = new Action;
                    $action->name = $item['name'];
                    $action->permission = $item['permission'];
                    $action->resource = $item['resource'];
                    $action->description = $item['description'];
                    $action->group()->associate($group)->save();
                }
            }
        }

    }
}
