<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use App\Models\Region;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProduct extends EditRecord
{
    protected static string $resource = ProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->after(function () {
                    $regions = Region::get();
                    $product = $this->record;
                    foreach ($regions as $region) {
                        $region->products()->detach($product->id, ['type' => $product->type]);
                    }
                }),
        ];
    }
}
