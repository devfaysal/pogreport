<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('regions')->delete();
        
        \DB::table('regions')->insert(array (
            0 => 
            array (
                'created_at' => '2023-10-16 03:55:42',
                'email' => NULL,
                'id' => 1,
                'name' => 'Banglabandha',
                'phone' => '1841145182',
                'updated_at' => '2023-10-16 03:55:42',
                'zone_id' => 1,
            ),
            1 => 
            array (
                'created_at' => '2023-10-16 03:55:42',
                'email' => NULL,
                'id' => 2,
                'name' => 'Birgonj',
                'phone' => '1841145153',
                'updated_at' => '2023-10-16 03:55:42',
                'zone_id' => 1,
            ),
            2 => 
            array (
                'created_at' => '2023-10-16 03:55:42',
                'email' => NULL,
                'id' => 3,
                'name' => 'Khet-Chachia',
                'phone' => '1841145267',
                'updated_at' => '2023-10-16 03:55:42',
                'zone_id' => 2,
            ),
            3 => 
            array (
                'created_at' => '2023-10-16 03:55:42',
                'email' => NULL,
                'id' => 4,
                'name' => 'Naogaon',
                'phone' => '1844643440',
                'updated_at' => '2023-10-16 03:55:42',
                'zone_id' => 2,
            ),
            4 => 
            array (
                'created_at' => '2023-10-16 03:55:43',
                'email' => NULL,
                'id' => 5,
                'name' => 'Rajshahi',
                'phone' => '1841145114',
                'updated_at' => '2023-10-16 03:55:43',
                'zone_id' => 3,
            ),
            5 => 
            array (
                'created_at' => '2023-10-16 03:55:43',
                'email' => NULL,
                'id' => 6,
                'name' => 'Hatikumrul',
                'phone' => '1841145117',
                'updated_at' => '2023-10-16 03:55:43',
                'zone_id' => 3,
            ),
            6 => 
            array (
                'created_at' => '2023-10-16 03:55:43',
                'email' => NULL,
                'id' => 7,
                'name' => 'Chuadanga',
                'phone' => '1841145231',
                'updated_at' => '2023-10-16 03:55:43',
                'zone_id' => 4,
            ),
            7 => 
            array (
                'created_at' => '2023-10-16 03:55:44',
                'email' => NULL,
                'id' => 8,
                'name' => 'Mirpur',
                'phone' => '1841145131',
                'updated_at' => '2023-10-16 03:55:44',
                'zone_id' => 4,
            ),
            8 => 
            array (
                'created_at' => '2023-10-16 03:55:44',
                'email' => NULL,
                'id' => 9,
                'name' => 'Bagerhat',
                'phone' => '1844643433',
                'updated_at' => '2023-10-16 03:55:44',
                'zone_id' => 5,
            ),
            9 => 
            array (
                'created_at' => '2023-10-16 03:55:44',
                'email' => NULL,
                'id' => 10,
                'name' => 'Gopalgonj',
                'phone' => '1841145253',
                'updated_at' => '2023-10-16 03:55:44',
                'zone_id' => 5,
            ),
            10 => 
            array (
                'created_at' => '2023-10-16 03:55:44',
                'email' => NULL,
                'id' => 11,
                'name' => 'Bhanga',
                'phone' => '',
                'updated_at' => '2023-10-16 03:55:44',
                'zone_id' => 5,
            ),
            11 => 
            array (
                'created_at' => '2023-10-16 03:55:44',
                'email' => NULL,
                'id' => 12,
                'name' => 'Manikganj',
                'phone' => '1841145130',
                'updated_at' => '2023-10-16 03:55:44',
                'zone_id' => 6,
            ),
            12 => 
            array (
                'created_at' => '2023-10-16 03:55:44',
                'email' => NULL,
                'id' => 13,
                'name' => 'Jamalpur',
                'phone' => '1841145126',
                'updated_at' => '2023-10-16 03:55:44',
                'zone_id' => 7,
            ),
            13 => 
            array (
                'created_at' => '2023-10-16 03:55:44',
                'email' => NULL,
                'id' => 14,
                'name' => 'Shambhuganj',
                'phone' => '1841145206',
                'updated_at' => '2023-10-16 03:55:44',
                'zone_id' => 7,
            ),
            14 => 
            array (
                'created_at' => '2023-10-16 03:55:45',
                'email' => NULL,
                'id' => 15,
                'name' => 'Kishoreganj',
                'phone' => '',
                'updated_at' => '2023-10-16 03:55:45',
                'zone_id' => 8,
            ),
            15 => 
            array (
                'created_at' => '2023-10-16 03:55:45',
                'email' => NULL,
                'id' => 16,
                'name' => 'Habiganj',
                'phone' => '1841145283',
                'updated_at' => '2023-10-16 03:55:45',
                'zone_id' => 9,
            ),
            16 => 
            array (
                'created_at' => '2023-10-16 03:55:45',
                'email' => NULL,
                'id' => 17,
                'name' => 'Sunamganj',
                'phone' => '1841145143',
                'updated_at' => '2023-10-16 03:55:45',
                'zone_id' => 9,
            ),
            17 => 
            array (
                'created_at' => '2023-10-16 03:55:45',
                'email' => NULL,
                'id' => 18,
                'name' => 'Sreemongal',
                'phone' => '1841145169',
                'updated_at' => '2023-10-16 03:55:45',
                'zone_id' => 9,
            ),
            18 => 
            array (
                'created_at' => '2023-10-16 03:55:45',
                'email' => NULL,
                'id' => 19,
                'name' => 'Sonaimuri',
                'phone' => '1841145243',
                'updated_at' => '2023-10-16 03:55:45',
                'zone_id' => 10,
            ),
            19 => 
            array (
                'created_at' => '2023-10-16 03:55:46',
                'email' => NULL,
                'id' => 20,
                'name' => 'Hatia',
                'phone' => '1844643435',
                'updated_at' => '2023-10-16 03:55:46',
                'zone_id' => 10,
            ),
            20 => 
            array (
                'created_at' => '2023-10-16 03:55:46',
                'email' => NULL,
                'id' => 21,
                'name' => 'Khagrachari',
                'phone' => '1841145142',
                'updated_at' => '2023-10-16 03:55:46',
                'zone_id' => 11,
            ),
            21 => 
            array (
                'created_at' => '2023-10-16 03:55:46',
                'email' => NULL,
                'id' => 22,
                'name' => 'Chokoria',
                'phone' => '1841145258',
                'updated_at' => '2023-10-16 03:55:46',
                'zone_id' => 11,
            ),
            22 => 
            array (
                'created_at' => '2023-10-16 03:55:46',
                'email' => NULL,
                'id' => 23,
                'name' => 'Rangpur',
                'phone' => '1844643455',
                'updated_at' => '2023-10-16 03:55:46',
                'zone_id' => 12,
            ),
            23 => 
            array (
                'created_at' => '2023-10-16 03:55:46',
                'email' => NULL,
                'id' => 24,
                'name' => 'Lalmonirhat',
                'phone' => '1841145135',
                'updated_at' => '2023-10-16 03:55:46',
                'zone_id' => 12,
            ),
            24 => 
            array (
                'created_at' => '2023-10-16 03:55:46',
                'email' => NULL,
                'id' => 25,
                'name' => 'Gaibandha',
                'phone' => '1841145140',
                'updated_at' => '2023-10-16 03:55:46',
                'zone_id' => 12,
            ),
            25 => 
            array (
                'created_at' => '2023-10-16 03:55:47',
                'email' => NULL,
                'id' => 26,
                'name' => 'Patuakhali',
                'phone' => '',
                'updated_at' => '2023-10-16 03:55:47',
                'zone_id' => 13,
            ),
            26 => 
            array (
                'created_at' => '2023-10-16 03:55:47',
                'email' => NULL,
                'id' => 27,
                'name' => 'Norail',
                'phone' => '1841145229',
                'updated_at' => '2023-10-16 03:55:47',
                'zone_id' => 14,
            ),
            27 => 
            array (
                'created_at' => '2023-10-16 03:55:47',
                'email' => NULL,
                'id' => 28,
                'name' => 'Shyamnagar',
                'phone' => '1841145161',
                'updated_at' => '2023-10-16 03:55:47',
                'zone_id' => 14,
            ),
            28 => 
            array (
                'created_at' => '2023-10-16 03:55:47',
                'email' => NULL,
                'id' => 29,
                'name' => 'B Baria',
                'phone' => '',
                'updated_at' => '2023-10-16 03:55:47',
                'zone_id' => 15,
            ),
            29 => 
            array (
                'created_at' => '2023-10-16 03:55:48',
                'email' => NULL,
                'id' => 30,
                'name' => 'Motlab',
                'phone' => '1841145183',
                'updated_at' => '2023-10-16 03:55:48',
                'zone_id' => 15,
            ),
        ));
        
        
    }
}