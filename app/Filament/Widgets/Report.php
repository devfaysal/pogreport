<?php

namespace App\Filament\Widgets;

use App\Models\Zone;
use Filament\Widgets\Widget;

class Report extends Widget
{
    protected static string $view = 'filament.widgets.report';

    protected int | string | array $columnSpan = 2;

    public $zones;

    public function mount()
    {
        $this->zones = Zone::get();
        // dd(Zone::first()->hybridRice()['budget']);
    }
}
