<?php

namespace App\Exports;

use App\Models\Product;
use App\Models\Zone;
use Illuminate\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class HybridRiceReport implements FromView
{
    public function view(): View
    {
        return view('filament.pages.tables.hybrid-rice', [
            'zones' => Zone::all(),
            'products' => Product::where('type', 'Hybrid Rice')->get(),
        ]);
    }
}
