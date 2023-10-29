<?php

namespace App\Filament\Pages;

use App\Models\Zone;
use Filament\Pages\Page;

class Summary extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.summary';

    protected static ?string $navigationGroup = 'Reports';

    public $zones;

    public function mount()
    {
        $this->zones = Zone::get();
    }
}
