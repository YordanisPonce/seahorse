<?php

namespace App\Filament\Resources\TrackedVisits;

use App\Filament\Resources\TrackedVisits\Pages\CreateTrackedVisit;
use App\Filament\Resources\TrackedVisits\Pages\EditTrackedVisit;
use App\Filament\Resources\TrackedVisits\Pages\ListTrackedVisits;
use App\Filament\Resources\TrackedVisits\Schemas\TrackedVisitForm;
use App\Filament\Resources\TrackedVisits\Tables\TrackedVisitsTable;
use App\Models\TrackedVisit;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class TrackedVisitResource extends Resource
{
    protected static ?string $model = TrackedVisit::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::GlobeAlt;

    protected static ?string $recordTitleAttribute = 'Visita';

    protected static ?string $navigationLabel = 'Visitas rastreadas';
    protected static ?string $modelLabel = 'Visita rastreada';

    protected static ?string $title = 'Visitas rastreadas';
    protected static ?string $pluralModelLabel = 'Visitas rastreadas';

    public static function form(Schema $schema): Schema
    {
        return TrackedVisitForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TrackedVisitsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTrackedVisits::route('/'),
            'create' => CreateTrackedVisit::route('/create'),
            'edit' => EditTrackedVisit::route('/{record}/edit'),
        ];
    }
}
