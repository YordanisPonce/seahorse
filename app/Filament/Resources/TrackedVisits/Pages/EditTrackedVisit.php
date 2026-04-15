<?php

namespace App\Filament\Resources\TrackedVisits\Pages;

use App\Filament\Resources\TrackedVisits\TrackedVisitResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditTrackedVisit extends EditRecord
{
    protected static string $resource = TrackedVisitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
