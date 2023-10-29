<?php

namespace App\Exports;

use App\Models\Product;
use App\Models\Zone;
use Illuminate\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class InbredRiceReport implements FromView
{
    public function view(): View
    {
        return view('filament.pages.tables.inbred-rice', [
            'zones' => Zone::all(),
            'products' => Product::where('type', 'Inbred Rice')->get(),
        ]);
    }
}
