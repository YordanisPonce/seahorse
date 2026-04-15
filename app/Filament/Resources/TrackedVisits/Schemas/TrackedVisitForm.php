<?php

namespace App\Filament\Resources\TrackedVisits\Schemas;

use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TrackedVisitForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('token')->label('Token'),
                TextInput::make('ip')->label('IP'),
                TextInput::make('method')->label('Método'),
                Textarea::make('user_agent')->label('Navegador / dispositivo'),
                Textarea::make('referer')->label('Referer'),
                Textarea::make('full_url')->label('URL completa'),
                KeyValue::make('headers')->label('Headers'),
                KeyValue::make('server_data')->label('Datos del servidor'),
            ]);
    }
}
