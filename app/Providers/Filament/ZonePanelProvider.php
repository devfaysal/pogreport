<?php

namespace App\Providers\Filament;

use App\Filament\Pages\Auth\ZoneLogin;
use App\Filament\Zone\Pages\EditProfile;
use App\Filament\Zone\Widgets\Regions;
use App\Filament\Zone\Widgets\Welcome;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class ZonePanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('zone')
            ->path('zone')
            ->brandLogo(asset('sscl_logo.png'))
            ->brandLogoHeight('4rem')
            ->login(ZoneLogin::class)
            ->authGuard('zone')
            ->colors([
                'primary' => Color::Amber,
            ])
            ->darkMode(false)
            ->discoverResources(in: app_path('Filament/Zone/Resources'), for: 'App\\Filament\\Zone\\Resources')
            ->discoverPages(in: app_path('Filament/Zone/Pages'), for: 'App\\Filament\\Zone\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Zone/Widgets'), for: 'App\\Filament\\Zone\\Widgets')
            ->widgets([
                Regions::class,
                Welcome::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->profile(EditProfile::class)
            ->authMiddleware([
                Authenticate::class,
            ])
            ->databaseNotifications();
    }
}
