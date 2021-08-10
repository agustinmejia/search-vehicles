<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class VehiclesClassesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('vehicles_classes')->delete();
        
        \DB::table('vehicles_classes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Motocicleta',
                'slug' => 'motocicleta',
                'details' => NULL,
                'created_at' => '2021-08-09 23:12:58',
                'updated_at' => '2021-08-09 23:12:58',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Automóvil',
                'slug' => 'automovil',
                'details' => NULL,
                'created_at' => '2021-08-09 23:13:21',
                'updated_at' => '2021-08-09 23:13:21',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}