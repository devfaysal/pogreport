<?php

namespace App\Filament\Resources\RegionResource\Pages;

use App\Filament\Resources\RegionResource;
use App\Models\Product;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateRegion extends CreateRecord
{
    protected static string $resource = RegionResource::class;

    protected function afterCreate(): void
    {
        // Runs after the form fields are saved to the database.
        $products = Product::get();
        $region = $this->record;
        foreach ($products as $product) {
            $product->regions()->attach($region->id, ['type' => $product->type]);
        }
    }
}
