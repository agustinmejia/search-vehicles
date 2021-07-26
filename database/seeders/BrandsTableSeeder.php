<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('brands')->delete();
        
        \DB::table('brands')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Honda',
                'slug' => 'honda',
                'created_at' => '2021-07-26 11:56:26',
                'updated_at' => '2021-07-26 11:56:26',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Toyota',
                'slug' => 'toyota',
                'created_at' => '2021-07-26 11:56:33',
                'updated_at' => '2021-07-26 11:56:33',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Nissan',
                'slug' => 'nissan',
                'created_at' => '2021-07-26 11:57:02',
                'updated_at' => '2021-07-26 11:57:02',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Serna',
                'slug' => 'serna',
                'created_at' => '2021-07-26 11:57:22',
                'updated_at' => '2021-07-26 11:57:22',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Kingo',
                'slug' => 'kingo',
                'created_at' => '2021-07-26 11:57:30',
                'updated_at' => '2021-07-26 11:57:30',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Maruti',
                'slug' => 'maruti',
                'created_at' => '2021-07-26 11:57:36',
                'updated_at' => '2021-07-26 11:57:36',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Yamaha',
                'slug' => 'yamaha',
                'created_at' => '2021-07-26 11:57:55',
                'updated_at' => '2021-07-26 11:57:55',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Boxer',
                'slug' => 'boxer',
                'created_at' => '2021-07-26 11:58:01',
                'updated_at' => '2021-07-26 11:58:01',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Daimo',
                'slug' => 'daimo',
                'created_at' => '2021-07-26 11:58:08',
                'updated_at' => '2021-07-26 11:58:08',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'USM',
                'slug' => 'usm',
                'created_at' => '2021-07-26 11:58:15',
                'updated_at' => '2021-07-26 11:58:15',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}