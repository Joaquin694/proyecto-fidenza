<?php

namespace App\Filament\Resources\CompraProveedorResource\Pages;

use App\Filament\Resources\CompraProveedorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCompraProveedor extends EditRecord
{
    protected static string $resource = CompraProveedorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
