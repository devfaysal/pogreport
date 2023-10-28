<?php

namespace App\Filament\Pages;

use App\Exports\InbredRiceReport;
use App\Models\Zone;
use Filament\Actions\Action;
use Filament\Pages\Page;
use Maatwebsite\Excel\Facades\Excel;

class InbredRice extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.inbred-rice';

    protected static ?string $navigationGroup = 'Reports';

    public $zones;

    public function mount()
    {
        $this->zones = Zone::get();
    }

    protected function getHeaderActions(): array
    {
        return [
            Action::make('Export')
            ->action(function () {
                return Excel::download(new InbredRiceReport, 'InbredRiceReport-' . time() . '.xlsx');
            }),
        ];
    }
}
