<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FireRiskResource\Pages;
use App\Models\FireRisk;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;

class FireRiskResource extends Resource
{
    protected static ?string $model = FireRisk::class;

    protected static ?string $navigationIcon = 'heroicon-o-fire'; // Ikon untuk menu

    protected static ?string $label = 'Fire Risk'; // Nama resource di menu

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('location')
                    ->required()
                    ->label('Location'),
                Forms\Components\Select::make('risk_level')
                    ->required()
                    ->options([
                        'low' => 'Low',
                        'medium' => 'Medium',
                        'high' => 'High',
                    ])
                    ->label('Risk Level'),
                Forms\Components\Textarea::make('description')
                    ->label('Description'),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable(),
                Tables\Columns\TextColumn::make('location')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('risk_level')->sortable(),
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
            'index' => Pages\ListFireRisks::route('/'),
            'create' => Pages\CreateFireRisk::route('/create'),
            'edit' => Pages\EditFireRisk::route('/{record}/edit'),
        ];
    }
}
