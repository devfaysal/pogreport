<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class Welcome extends Widget
{
    protected static ?int $sort = -3;

    protected static string $view = 'filament.widgets.welcome';
}
