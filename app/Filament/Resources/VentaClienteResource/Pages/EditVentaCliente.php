<?php

namespace App\Filament\Resources\VentaClienteResource\Pages;

use App\Filament\Resources\VentaClienteResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVentaCliente extends EditRecord
{
    protected static string $resource = VentaClienteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
