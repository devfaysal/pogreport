<?php

namespace App\Console\Commands;

use App\Models\Product;
use App\Models\Region;
use App\Models\Zone;
use Database\Seeders\ProductsTableSeeder;
use Database\Seeders\RegionsTableSeeder;
use Database\Seeders\ZonesTableSeeder;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class CleanData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:clean-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Zone::truncate();
        Region::truncate();
        Product::truncate();
        DB::table('product_region')->truncate();
        $this->call(ZonesTableSeeder::class);
        $this->call(RegionsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        Artisan::call('app:assign-product');
    }
}
