<?php

namespace App\Filament\Resources\AnnouncementTypeResource\Pages;

use App\Filament\Resources\AnnouncementTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewAnnouncementType extends ViewRecord
{
    protected static string $resource = AnnouncementTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
