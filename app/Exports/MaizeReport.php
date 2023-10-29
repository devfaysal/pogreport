<?php

namespace App\Exports;

use App\Models\Product;
use App\Models\Zone;
use Illuminate\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class MaizeReport implements FromView
{
    public function view(): View
    {
        return view('filament.pages.tables.maize', [
            'zones' => Zone::all(),
            'products' => Product::where('type', 'Hybrid Maize')->get(),
        ]);
    }
}
