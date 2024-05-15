<?php

namespace App\Filament\Zone\Resources\RegionResource\Pages;

use App\Filament\Zone\Resources\RegionResource;
use App\Models\Region;
use Filament\Resources\Pages\Page;

class Products extends Page
{
    protected static string $resource = RegionResource::class;

    protected static string $view = 'filament.zone.resources.region-resource.pages.products';

    public static ?string $title = null;

    public Region $region;

    public $type;

    public $products;

    public function mount(Region $record)
    {
        static::$title = $record->name;
        $this->region = $record;
        $this->type = request()->has('type') ? request('type') : 'Hybrid Rice';
        $this->products = $record->products->where('pivot.type', $this->type);
    }
}
