<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_id' => 1,
                'title' => 'Inicio',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-home',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2021-06-02 17:55:32',
                'updated_at' => '2021-06-02 14:51:15',
                'route' => 'voyager.profile',
                'parameters' => 'null',
            ),
            1 => 
            array (
                'id' => 2,
                'menu_id' => 1,
                'title' => 'Media',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 3,
                'created_at' => '2021-06-02 17:55:32',
                'updated_at' => '2021-08-09 23:07:48',
                'route' => 'voyager.media.index',
                'parameters' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'menu_id' => 1,
                'title' => 'Usuarios',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => '#000000',
                'parent_id' => 11,
                'order' => 1,
                'created_at' => '2021-06-02 17:55:32',
                'updated_at' => '2021-07-26 12:01:15',
                'route' => 'voyager.users.index',
                'parameters' => 'null',
            ),
            3 => 
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => 'Roles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => NULL,
                'parent_id' => 11,
                'order' => 2,
                'created_at' => '2021-06-02 17:55:32',
                'updated_at' => '2021-06-02 14:08:05',
                'route' => 'voyager.roles.index',
                'parameters' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => 'Herramientas',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 7,
                'created_at' => '2021-06-02 17:55:32',
                'updated_at' => '2021-08-09 23:07:52',
                'route' => NULL,
                'parameters' => '',
            ),
            5 => 
            array (
                'id' => 6,
                'menu_id' => 1,
                'title' => 'Menu Builder',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 1,
                'created_at' => '2021-06-02 17:55:33',
                'updated_at' => '2021-06-02 14:07:22',
                'route' => 'voyager.menus.index',
                'parameters' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'menu_id' => 1,
                'title' => 'Database',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 2,
                'created_at' => '2021-06-02 17:55:33',
                'updated_at' => '2021-06-02 14:07:22',
                'route' => 'voyager.database.index',
                'parameters' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'menu_id' => 1,
                'title' => 'Compass',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 4,
                'created_at' => '2021-06-02 17:55:33',
                'updated_at' => '2021-08-09 23:07:48',
                'route' => 'voyager.compass.index',
                'parameters' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'menu_id' => 1,
                'title' => 'BREAD',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bread',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 5,
                'created_at' => '2021-06-02 17:55:33',
                'updated_at' => '2021-08-09 23:07:48',
                'route' => 'voyager.bread.index',
                'parameters' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'menu_id' => 1,
                'title' => 'Configuración',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 6,
                'created_at' => '2021-06-02 17:55:33',
                'updated_at' => '2021-08-09 23:07:52',
                'route' => 'voyager.settings.index',
                'parameters' => 'null',
            ),
            10 => 
            array (
                'id' => 11,
                'menu_id' => 1,
                'title' => 'Seguridad',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 5,
                'created_at' => '2021-06-02 14:07:53',
                'updated_at' => '2021-08-04 23:28:42',
                'route' => NULL,
                'parameters' => '',
            ),
            11 => 
            array (
                'id' => 12,
                'menu_id' => 1,
                'title' => 'Limpiar cache',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-refresh',
                'color' => '#000000',
                'parent_id' => 5,
                'order' => 6,
                'created_at' => '2021-06-25 18:03:59',
                'updated_at' => '2021-08-09 23:07:48',
                'route' => 'clear.cache',
                'parameters' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'menu_id' => 1,
                'title' => 'Marcas',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tag',
                'color' => NULL,
                'parent_id' => 18,
                'order' => 1,
                'created_at' => '2021-07-26 11:48:25',
                'updated_at' => '2021-07-26 12:16:17',
                'route' => 'voyager.brands.index',
                'parameters' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'menu_id' => 1,
                'title' => 'Clases de Vehículo',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-window-list',
                'color' => NULL,
                'parent_id' => 18,
                'order' => 2,
                'created_at' => '2021-07-26 11:50:59',
                'updated_at' => '2021-07-26 12:37:50',
                'route' => 'voyager.vehicles-classes.index',
                'parameters' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'menu_id' => 1,
                'title' => 'Tipos de Vehículo',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-logbook',
                'color' => NULL,
                'parent_id' => 18,
                'order' => 3,
                'created_at' => '2021-07-26 11:53:13',
                'updated_at' => '2021-07-26 12:37:50',
                'route' => 'voyager.vehicles-types.index',
                'parameters' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'menu_id' => 1,
                'title' => 'Registros',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-edit',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2021-07-26 11:54:16',
                'updated_at' => '2021-08-04 23:28:46',
                'route' => NULL,
                'parameters' => '',
            ),
            16 => 
            array (
                'id' => 17,
                'menu_id' => 1,
                'title' => 'Personas',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-people',
                'color' => NULL,
                'parent_id' => 16,
                'order' => 1,
                'created_at' => '2021-07-26 12:13:31',
                'updated_at' => '2021-07-26 12:13:53',
                'route' => 'voyager.people.index',
                'parameters' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'menu_id' => 1,
                'title' => 'Parámetros',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-params',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 4,
                'created_at' => '2021-07-26 12:16:07',
                'updated_at' => '2021-08-04 23:28:46',
                'route' => NULL,
                'parameters' => '',
            ),
            18 => 
            array (
                'id' => 19,
                'menu_id' => 1,
                'title' => 'Vehículos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-truck',
                'color' => NULL,
                'parent_id' => 16,
                'order' => 2,
                'created_at' => '2021-07-26 12:22:03',
                'updated_at' => '2021-07-26 12:22:35',
                'route' => 'voyager.vehicles.index',
                'parameters' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'menu_id' => 1,
                'title' => 'Provincias',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-book',
                'color' => NULL,
                'parent_id' => 18,
                'order' => 4,
                'created_at' => '2021-08-04 22:08:33',
                'updated_at' => '2021-08-04 22:11:44',
                'route' => 'voyager.provinces.index',
                'parameters' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'menu_id' => 1,
                'title' => 'Ciudades',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-milestone',
                'color' => '#000000',
                'parent_id' => 18,
                'order' => 5,
                'created_at' => '2021-08-04 22:09:08',
                'updated_at' => '2021-08-04 22:11:56',
                'route' => 'voyager.cities.index',
                'parameters' => 'null',
            ),
            21 => 
            array (
                'id' => 22,
                'menu_id' => 1,
                'title' => 'Denuncias',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-news',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2021-08-04 22:42:45',
                'updated_at' => '2021-08-04 23:28:46',
                'route' => 'complaints.index',
                'parameters' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'menu_id' => 1,
                'title' => 'Permisos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 11,
                'order' => 3,
                'created_at' => '2021-08-09 22:18:45',
                'updated_at' => '2021-08-09 23:07:51',
                'route' => 'voyager.permissions.index',
                'parameters' => NULL,
            ),
        ));
        
        
    }
}