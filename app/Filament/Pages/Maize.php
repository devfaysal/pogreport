<?php

namespace App\Filament\Pages;

use App\Exports\MaizeReport;
use App\Models\Product;
use App\Models\Zone;
use Filament\Actions\Action;
use Filament\Pages\Page;
use Maatwebsite\Excel\Facades\Excel;

class Maize extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.maize';

    protected static ?string $navigationGroup = 'Reports';

    public $zones;

    public $products;

    public function mount()
    {
        $this->zones = Zone::get();
        $this->products = Product::where('type', 'Hybrid Maize')->get();
    }

    protected function getHeaderActions(): array
    {
        return [
            Action::make('Export')
                ->action(function () {
                    return Excel::download(new MaizeReport, 'MaizeReport-'.time().'.xlsx');
                }),
        ];
    }
}
