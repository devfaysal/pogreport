<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Region;
use App\Models\Zone;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Faysal Ahamed',
            'email' => 'faysal@surovigroup.net',
        ]);
        $this->call(ZonesTableSeeder::class);
        $this->call(RegionsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
    }
}
