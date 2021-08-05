<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cities')->delete();
        
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'province_id' => 1,
                'name' => 'Santísima Trinidad',
                'created_at' => '2021-08-04 22:32:29',
                'updated_at' => '2021-08-04 22:32:29',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'province_id' => 5,
                'name' => 'Guayaramerín',
                'created_at' => '2021-08-04 22:32:57',
                'updated_at' => '2021-08-04 22:32:57',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'province_id' => 5,
                'name' => 'Riberalta',
                'created_at' => '2021-08-04 22:33:18',
                'updated_at' => '2021-08-04 22:33:18',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}