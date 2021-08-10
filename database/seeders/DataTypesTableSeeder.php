<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2021-06-02 17:55:30',
                'updated_at' => '2021-06-02 17:55:30',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2021-06-02 17:55:30',
                'updated_at' => '2021-06-02 17:55:30',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2021-06-02 17:55:31',
                'updated_at' => '2021-06-02 17:55:31',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'brands',
                'slug' => 'brands',
                'display_name_singular' => 'Marca',
                'display_name_plural' => 'Marcas',
                'icon' => 'voyager-tag',
                'model_name' => 'App\\Models\\Brand',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2021-07-26 11:48:25',
                'updated_at' => '2021-07-26 11:48:25',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'vehicles_classes',
                'slug' => 'vehicles-classes',
                'display_name_singular' => 'Clase de Vehículo',
                'display_name_plural' => 'Clases de Vehículo',
                'icon' => 'voyager-window-list',
                'model_name' => 'App\\Models\\VehiclesClass',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-07-26 11:50:59',
                'updated_at' => '2021-07-26 12:39:06',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'vehicles_types',
                'slug' => 'vehicles-types',
                'display_name_singular' => 'Tipo de Vehículo',
                'display_name_plural' => 'Tipos de Vehículo',
                'icon' => 'voyager-logbook',
                'model_name' => 'App\\Models\\VehiclesType',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-07-26 11:53:13',
                'updated_at' => '2021-08-09 22:48:30',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'people',
                'slug' => 'people',
                'display_name_singular' => 'Persona',
                'display_name_plural' => 'Personas',
                'icon' => 'voyager-people',
                'model_name' => 'App\\Models\\Person',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-07-26 12:13:30',
                'updated_at' => '2021-07-26 12:14:38',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'vehicles',
                'slug' => 'vehicles',
                'display_name_singular' => 'Vehículo',
                'display_name_plural' => 'Vehículos',
                'icon' => 'voyager-truck',
                'model_name' => 'App\\Models\\Vehicle',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-07-26 12:22:03',
                'updated_at' => '2021-08-09 22:59:51',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'provinces',
                'slug' => 'provinces',
                'display_name_singular' => 'Provincia',
                'display_name_plural' => 'Provincias',
                'icon' => 'voyager-book',
                'model_name' => 'App\\Models\\Province',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-08-04 22:08:32',
                'updated_at' => '2021-08-04 22:23:13',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'cities',
                'slug' => 'cities',
                'display_name_singular' => 'Ciudad',
                'display_name_plural' => 'Ciudades',
                'icon' => 'voyager-milestone',
                'model_name' => 'App\\Models\\City',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2021-08-04 22:09:08',
                'updated_at' => '2021-08-04 22:20:59',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'permissions',
                'slug' => 'permissions',
                'display_name_singular' => 'Permiso',
                'display_name_plural' => 'Permisos',
                'icon' => 'voyager-list',
                'model_name' => 'App\\Models\\Permission',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2021-08-09 22:18:43',
                'updated_at' => '2021-08-09 22:18:43',
            ),
        ));
        
        
    }
}