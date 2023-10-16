<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ZonesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('zones')->delete();
        
        \DB::table('zones')->insert(array (
            0 => 
            array (
                'created_at' => '2023-10-16 03:53:49',
                'id' => 1,
                'name' => 'Banglabandha-Hili',
                'phone' => '1841145197',
                'updated_at' => '2023-10-16 03:53:49',
            ),
            1 => 
            array (
                'created_at' => '2023-10-16 03:53:49',
                'id' => 2,
                'name' => 'Kalia-Gomostapur',
                'phone' => '1841145232',
                'updated_at' => '2023-10-16 03:53:49',
            ),
            2 => 
            array (
                'created_at' => '2023-10-16 03:53:49',
                'id' => 3,
                'name' => 'Sibgonj-Belkochi',
                'phone' => '1841145139',
                'updated_at' => '2023-10-16 03:53:49',
            ),
            3 => 
            array (
                'created_at' => '2023-10-16 03:53:50',
                'id' => 4,
                'name' => 'Bheramera-Alfadanga',
                'phone' => '1841145115',
                'updated_at' => '2023-10-16 03:53:50',
            ),
            4 => 
            array (
                'created_at' => '2023-10-16 03:53:50',
                'id' => 5,
                'name' => 'Sundarban-Jazira',
                'phone' => '1841145136',
                'updated_at' => '2023-10-16 03:53:50',
            ),
            5 => 
            array (
                'created_at' => '2023-10-16 03:53:50',
                'id' => 6,
                'name' => 'Saturia-Tongibari',
                'phone' => '44',
                'updated_at' => '2023-10-16 03:53:50',
            ),
            6 => 
            array (
                'created_at' => '2023-10-16 03:53:50',
                'id' => 7,
                'name' => 'Bakshigonj-Nagorpur',
                'phone' => '1841145234',
                'updated_at' => '2023-10-16 03:53:50',
            ),
            7 => 
            array (
                'created_at' => '2023-10-16 03:53:50',
                'id' => 8,
                'name' => 'Dugapur-Norsingdi',
                'phone' => '44',
                'updated_at' => '2023-10-16 03:53:50',
            ),
            8 => 
            array (
                'created_at' => '2023-10-16 03:53:51',
                'id' => 9,
                'name' => 'Adampur-Jaintapur',
                'phone' => '1841145157',
                'updated_at' => '2023-10-16 03:53:51',
            ),
            9 => 
            array (
                'created_at' => '2023-10-16 03:53:51',
                'id' => 10,
                'name' => 'Laksham-Hatia-Sita',
                'phone' => '1921196859',
                'updated_at' => '2023-10-16 03:53:51',
            ),
            10 => 
            array (
                'created_at' => '2023-10-16 03:53:51',
                'id' => 11,
                'name' => 'Panchari-Teknaf',
                'phone' => '1841145240',
                'updated_at' => '2023-10-16 03:53:51',
            ),
            11 => 
            array (
                'created_at' => '2023-10-16 03:53:51',
                'id' => 12,
                'name' => 'Patgram-Sonatola',
                'phone' => '1841145222',
                'updated_at' => '2023-10-16 03:53:51',
            ),
            12 => 
            array (
                'created_at' => '2023-10-16 03:53:51',
                'id' => 13,
                'name' => 'Kuakata-Babugonj',
                'phone' => '44',
                'updated_at' => '2023-10-16 03:53:51',
            ),
            13 => 
            array (
                'created_at' => '2023-10-16 03:53:51',
                'id' => 14,
                'name' => 'Shyamnagar-Lohagore',
                'phone' => '1841145122',
                'updated_at' => '2023-10-16 03:53:51',
            ),
            14 => 
            array (
                'created_at' => '2023-10-16 03:53:52',
                'id' => 15,
                'name' => 'Nasirnagar-Hayemchar',
                'phone' => '1844643436',
                'updated_at' => '2023-10-16 03:53:52',
            ),
        ));
        
        
    }
}