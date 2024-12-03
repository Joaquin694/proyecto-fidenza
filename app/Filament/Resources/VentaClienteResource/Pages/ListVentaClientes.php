<?php

namespace App\Filament\Resources\VentaClienteResource\Pages;

use App\Filament\Resources\VentaClienteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVentaClientes extends ListRecords
{
    protected static string $resource = VentaClienteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
