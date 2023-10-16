<?php

namespace App\Filament\Region\Pages;

use Filament\Pages\Page;
use Illuminate\Support\Facades\Auth;

class PogReport extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.region.pages.pog-report';

    public $products;

    public function mount()
    {
        $region = Auth::user();
        // dd($region->products);
        $this->products = $region->products;
    }
}
