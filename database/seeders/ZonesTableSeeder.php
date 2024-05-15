<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('zones')->delete();

        DB::table('zones')->insert([
            [
                'name' => 'Banglabandha-Hili',
                'phone' => '01841145197',
                'password' => bcrypt('$upreme$eed'),
            ],
            [
                'name' => 'Kalia-Gomostapur',
                'phone' => '01841145232',
                'password' => bcrypt('$upreme$eed'),
            ],
            [
                'name' => 'Sibgonj-Belkochi',
                'phone' => '01841145139',
                'password' => bcrypt('$upreme$eed'),
            ],
            [
                'name' => 'Bheramera-Alfadanga',
                'phone' => '01841145115',
                'password' => bcrypt('$upreme$eed'),
            ],
            [
                'name' => 'Sundarban-Jazira',
                'phone' => '01841145136',
                'password' => bcrypt('$upreme$eed'),
            ],
            [
                'name' => 'Saturia-Tongibari',
                'phone' => '01234567890',
                'password' => bcrypt('$upreme$eed'),
            ],
            [
                'name' => 'Bakshigonj-Nagorpur',
                'phone' => '01841145234',
                'password' => bcrypt('$upreme$eed'),
            ],
            [
                'name' => 'Dugapur-Norsingdi',
                'phone' => '01234567891',
                'password' => bcrypt('$upreme$eed'),
            ],
            [
                'name' => 'Adampur-Jaintapur',
                'phone' => '01841145157',
                'password' => bcrypt('$upreme$eed'),
            ],
            [
                'name' => 'Laksham-Hatia-Sita',
                'phone' => '01921196859',
                'password' => bcrypt('$upreme$eed'),
            ],
            [
                'name' => 'Panchari-Teknaf',
                'phone' => '01841145240',
                'password' => bcrypt('$upreme$eed'),
            ],
            [
                'name' => 'Patgram-Sonatola',
                'phone' => '01841145222',
                'password' => bcrypt('$upreme$eed'),
            ],
            [
                'name' => 'Kuakata-Babugonj',
                'phone' => '01234567892',
                'password' => bcrypt('$upreme$eed'),
            ],
            [
                'name' => 'Shyamnagar-Lohagore',
                'phone' => '01841145122',
                'password' => bcrypt('$upreme$eed'),
            ],
            [
                'name' => 'Nasirnagar-Hayemchar',
                'phone' => '01844643436',
                'password' => bcrypt('$upreme$eed'),
            ],

        ]);
    }
}
