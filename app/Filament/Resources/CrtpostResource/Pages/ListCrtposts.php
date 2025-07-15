<?php

namespace App\Filament\Resources\CrtpostResource\Pages;

use App\Filament\Resources\CrtpostResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCrtposts extends ListRecords
{
    protected static string $resource = CrtpostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
