<?php

namespace App\Filament\Resources\AnnouncementTypeResource\Pages;

use App\Filament\Resources\AnnouncementTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAnnouncementType extends EditRecord
{
    protected static string $resource = AnnouncementTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
