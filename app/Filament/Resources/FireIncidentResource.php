<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FireIncidentResource\Pages;
use App\Models\FireIncident;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;

class FireIncidentResource extends Resource
{
    protected static ?string $model = FireIncident::class;

    protected static ?string $navigationIcon = 'heroicon-o-fire'; // Ikon untuk menu

    protected static ?string $label = 'Fire Incident'; // Nama resource di menu

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('location')
                    ->required()
                    ->label('Location'),
                Forms\Components\Textarea::make('description')
                    ->label('Description'),
                Forms\Components\DateTimePicker::make('incident_time') // Pastikan ini ada
                    ->required() // Set sebagai required
                    ->label('Incident Time'),
            ]);
    }
    

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('location')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('incident_time')->dateTime(), // Tampilkan waktu kejadian
                Tables\Columns\TextColumn::make('created_at')->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')->dateTime(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFireIncidents::route('/'),
            'create' => Pages\CreateFireIncident::route('/create'),
            'edit' => Pages\EditFireIncident::route('/{record}/edit'),
        ];
    }
}

