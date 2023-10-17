<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('regions')->delete();
        
        DB::table('regions')->insert([
            [
                'name' => 'Banglabandha',
                'phone' => '01841145182',
                'zone_id' => 1,
            ],
            [
                'name' => 'Birgonj',
                'phone' => '01841145153',
                'zone_id' => 1,
            ],
            [
                'name' => 'Khet-Chachia',
                'phone' => '01841145267',
                'zone_id' => 2,
            ],
            [
                'name' => 'Naogaon',
                'phone' => '01844643440',
                'zone_id' => 2,
            ],
            [
                'name' => 'Rajshahi',
                'phone' => '01841145114',
                'zone_id' => 3,
            ],
            [
                'name' => 'Hatikumrul',
                'phone' => '01841145117',
                'zone_id' => 3,
            ],
            [
                'name' => 'Chuadanga',
                'phone' => '01841145231',
                'zone_id' => 4,
            ],
            [
                'name' => 'Mirpur',
                'phone' => '01841145131',
                'zone_id' => 4,
            ],
            [
                'name' => 'Bagerhat',
                'phone' => '01844643433',
                'zone_id' => 5,
            ],
            [
                'name' => 'Gopalgonj',
                'phone' => '01841145253',
                'zone_id' => 5,
            ],
            [
                'name' => 'Bhanga',
                'phone' => '',
                'zone_id' => 5,
            ],
            [
                'name' => 'Manikganj',
                'phone' => '01841145130',
                'zone_id' => 6,
            ],
            [
                'name' => 'Jamalpur',
                'phone' => '01841145126',
                'zone_id' => 7,
            ],
            [
                'name' => 'Shambhuganj',
                'phone' => '01841145206',
                'zone_id' => 7,
            ],
            [
                'name' => 'Kishoreganj',
                'phone' => '',
                'zone_id' => 8,
            ],
            [
                'name' => 'Habiganj',
                'phone' => '01841145283',
                'zone_id' => 9,
            ],
            [
                'name' => 'Sunamganj',
                'phone' => '01841145143',
                'zone_id' => 9,
            ],
            [
                'name' => 'Sreemongal',
                'phone' => '01841145169',
                'zone_id' => 9,
            ],
            [
                'name' => 'Sonaimuri',
                'phone' => '01841145243',
                'zone_id' => 10,
            ],
            [
                'name' => 'Hatia',
                'phone' => '01844643435',
                'zone_id' => 10,
            ],
            [
                'name' => 'Khagrachari',
                'phone' => '01841145142',
                'zone_id' => 11,
            ],
            [
                'name' => 'Chokoria',
                'phone' => '01841145258',
                'zone_id' => 11,
            ],
            [
                'name' => 'Rangpur',
                'phone' => '01844643455',
                'zone_id' => 12,
            ],
            [
                'name' => 'Lalmonirhat',
                'phone' => '01841145135',
                'zone_id' => 12,
            ],
            [
                'name' => 'Gaibandha',
                'phone' => '01841145140',
                'zone_id' => 12,
            ],
            [
                'name' => 'Patuakhali',
                'phone' => '',
                'zone_id' => 13,
            ],
            [
                'name' => 'Norail',
                'phone' => '01841145229',
                'zone_id' => 14,
            ],
            [
                'name' => 'Shyamnagar',
                'phone' => '01841145161',
                'zone_id' => 14,
            ],
            [
                'name' => 'B Baria',
                'phone' => '',
                'zone_id' => 15,
            ],
            [
                'name' => 'Motlab',
                'phone' => '01841145183',
                'zone_id' => 15,
            ],
        ]);        
    }
}