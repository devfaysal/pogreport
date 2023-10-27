<?php

namespace App\Filament\Pages;

use App\Models\Zone;
use Filament\Pages\Page;

class Report extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.report';

    public $zones;

    public function mount()
    {
        $this->zones = Zone::get();
        // dd(Zone::first()->hybridRice()['budget']);
    }
}
