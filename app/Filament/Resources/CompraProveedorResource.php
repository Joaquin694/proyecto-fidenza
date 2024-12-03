<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompraProveedorResource\Pages;
use App\Filament\Resources\CompraProveedorResource\RelationManagers;
use App\Models\CompraProveedor;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CompraProveedorResource extends Resource
{
    protected static ?string $model = CompraProveedor::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListCompraProveedors::route('/'),
            'create' => Pages\CreateCompraProveedor::route('/create'),
            'edit' => Pages\EditCompraProveedor::route('/{record}/edit'),
        ];
    }
}
