<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use App\Models\Region;
use Filament\Resources\Pages\CreateRecord;

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;

    protected function afterCreate(): void
    {
        // Runs after the form fields are saved to the database.
        $regions = Region::get();
        $product = $this->record;
        foreach ($regions as $region) {
            $region->products()->attach($product->id, ['type' => $product->type]);
        }
    }
}
