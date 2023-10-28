<?php

namespace App\Filament\Zone\Resources;

use App\Filament\Zone\Resources\RegionResource\Pages;
use App\Filament\Zone\Resources\RegionResource\RelationManagers;
use App\Filament\Zone\Resources\RegionResource\RelationManagers\ProductsRelationManager;
use App\Models\Region;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class RegionResource extends Resource
{
    protected static ?string $model = Region::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function shouldSkipAuthorization(): bool
    {
        return true;
    }

    public static function getEloquentQuery(): Builder
    {
        $zone = Auth::user();

        return parent::getEloquentQuery()->where('zone_id', $zone->id);
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('phone'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([

            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            ProductsRelationManager::class,
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRegions::route('/'),
            'create' => Pages\CreateRegion::route('/create'),
            'view' => Pages\Products::route('/{record}'),
            // 'edit' => Pages\EditRegion::route('/{record}/edit'),
        ];
    }    
}
