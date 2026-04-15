<?php

namespace App\Filament\Resources\TrackedVisits\Pages;

use App\Filament\Resources\TrackedVisits\TrackedVisitResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListTrackedVisits extends ListRecords
{
    protected static string $resource = TrackedVisitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
