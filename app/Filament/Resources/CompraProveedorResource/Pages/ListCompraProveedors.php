<?php

namespace App\Filament\Resources\CompraProveedorResource\Pages;

use App\Filament\Resources\CompraProveedorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCompraProveedors extends ListRecords
{
    protected static string $resource = CompraProveedorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
