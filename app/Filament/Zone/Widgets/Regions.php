<?php

namespace App\Filament\Zone\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Auth;

class Regions extends Widget
{
    protected static string $view = 'filament.zone.widgets.regions';

    public $regions;

    public function mount()
    {
        $this->regions = Auth::user()->regions;
    }
}
