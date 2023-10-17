<?php

namespace App\Filament\Zone\Resources\RegionResource\Pages;

use App\Filament\Zone\Resources\RegionResource;
use App\Models\Region;
use Filament\Resources\Pages\Page;

class Products extends Page
{
    protected static string $resource = RegionResource::class;

    protected static string $view = 'filament.zone.resources.region-resource.pages.products';

    public Region $region;
    public $products;

    public function mount(Region $record)
    {
        $this->region = $record;
        $this->products = $record->products;
    }
}
