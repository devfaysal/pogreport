<?php

namespace App\Filament\Resources\RegionResource\Pages;

use App\Filament\Resources\RegionResource;
use App\Models\Region;
use Filament\Resources\Pages\Page;

class ViewRegion extends Page
{
    protected static string $resource = RegionResource::class;

    protected static string $view = 'filament.resources.region-resource.pages.view-region';

    public static ?string $title = null;
    public Region $region;
    public $products;

    public function mount(Region $record)
    {
        static::$title = $record->name;
        $this->region = $record;
        $this->products = $record->products;
    }
}
