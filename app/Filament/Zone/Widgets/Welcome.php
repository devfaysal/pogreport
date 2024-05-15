<?php

namespace App\Filament\Zone\Widgets;

use Filament\Widgets\Widget;

class Welcome extends Widget
{
    protected static ?int $sort = -3;

    protected static string $view = 'filament.zone.widgets.welcome';

    public static function shouldSkipAuthorization(): bool
    {
        return true;
    }
}
