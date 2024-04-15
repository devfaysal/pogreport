<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\ShieldSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $superAdmin = User::factory()->create([
            'name' => 'Faysal Ahamed',
            'email' => 'faysal@surovigroup.net',
        ]);
        $this->call(ShieldSeeder::class);
        $superAdmin->assignRole('super_admin');
        $this->call(ZonesTableSeeder::class);
        $this->call(RegionsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
    }
}
