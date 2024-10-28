<?php

namespace App\Filament\Resources\FireIncidentResource\Pages;

use App\Filament\Resources\FireIncidentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFireIncident extends EditRecord
{
    protected static string $resource = FireIncidentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
