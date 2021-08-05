<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('provinces')->delete();
        
        \DB::table('provinces')->insert(array (
            0 => 
            array (
                'id' => 1,
                'state' => 'Beni',
                'name' => 'Cercado',
                'created_at' => '2021-08-04 22:25:28',
                'updated_at' => '2021-08-04 22:25:28',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'state' => 'Beni',
                'name' => 'Mamoré',
                'created_at' => '2021-08-04 22:25:49',
                'updated_at' => '2021-08-04 22:25:49',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'state' => 'Beni',
                'name' => 'Iténez',
                'created_at' => '2021-08-04 22:26:14',
                'updated_at' => '2021-08-04 22:26:31',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'state' => 'Beni',
                'name' => 'Marbán',
                'created_at' => '2021-08-04 22:27:01',
                'updated_at' => '2021-08-04 22:27:01',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'state' => 'Beni',
                'name' => 'Vaca Díez',
                'created_at' => '2021-08-04 22:27:23',
                'updated_at' => '2021-08-04 22:27:23',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'state' => 'Beni',
                'name' => 'Moxos',
                'created_at' => '2021-08-04 22:27:42',
                'updated_at' => '2021-08-04 22:27:42',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'state' => 'Beni',
                'name' => 'Yacuma',
                'created_at' => '2021-08-04 22:28:03',
                'updated_at' => '2021-08-04 22:28:03',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'state' => 'Beni',
                'name' => 'José Ballivián',
                'created_at' => '2021-08-04 22:30:24',
                'updated_at' => '2021-08-04 22:30:24',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}