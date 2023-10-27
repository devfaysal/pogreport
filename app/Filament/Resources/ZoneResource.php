<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ZoneResource\Pages;
use App\Filament\Resources\ZoneResource\RelationManagers;
use App\Models\Zone;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;

class ZoneResource extends Resource
{
    protected static ?string $model = Zone::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                TextInput::make('phone'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('phone'),
                TextColumn::make('hybridRiceBudget')->label('HR Budget'),
                TextColumn::make('hybridRicePlacement')->label('HR Placement'),
                TextColumn::make('hybridRicePog')->label('HR POG'),
                TextColumn::make('inbredRiceBudget')->label('IR Budget'),
                TextColumn::make('inbredRicePlacement')->label('IR Placement'),
                TextColumn::make('inbredRicePog')->label('IR POG'),
                TextColumn::make('hybridMaizeBudget')->label('M Budget'),
                TextColumn::make('hybridMaizePlacement')->label('M Placement'),
                TextColumn::make('hybridMaizePog')->label('M POG'),
                TextColumn::make('budgetSum')->label('Budget Sum'),
                TextColumn::make('placementSum')->label('Placement Sum'),
                TextColumn::make('pogSum')->label('POG Sum'),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                // Tables\Actions\DeleteBulkAction::make(),
                    ExportBulkAction::make()->exports([
                        ExcelExport::make()->withFilename('zone-report-' . date('d-m-Y-H-i-s'))->fromTable()
                    ])
                ]),
            ])
            ->defaultPaginationPageOption(25);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListZones::route('/'),
            'create' => Pages\CreateZone::route('/create'),
            'edit' => Pages\EditZone::route('/{record}/edit'),
        ];
    }    
}
