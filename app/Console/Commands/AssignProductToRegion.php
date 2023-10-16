<?php

namespace App\Console\Commands;

use App\Models\Product;
use App\Models\Region;
use Illuminate\Console\Command;

class AssignProductToRegion extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'assign-product';

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
        $regions = Region::get();
        $products = Product::get();

        foreach($regions as $region){
            foreach($products as $product){
                $region->products()->attach($product->id,['type' => $product->type]);
            }
        }
    }
}
