<?php

namespace App\Filament\Resources\TrackedVisits\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TrackedVisitsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('index')->label('#')->rowIndex(),
                TextColumn::make('id')->label('ID')->sortable(),
                TextColumn::make('token')->label('Token'),
                TextColumn::make('ip')->label('IP'),
                TextColumn::make('method')->label('Método'),
                TextColumn::make('domain')->label('Dominio'),
                TextColumn::make('path')->label('Ruta'),
                TextColumn::make('user_agent')->label('Navegador / dispositivo'),
                IconColumn::make('is_secure')->label('HTTPS'),
                TextColumn::make('created_at')->label('Fecha'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
