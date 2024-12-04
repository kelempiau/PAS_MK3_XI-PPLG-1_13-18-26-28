<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlantResource\Pages;
use App\Filament\Resources\PlantResource\RelationManagers;
use App\Models\Plant;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PlantResource extends Resource
{
    protected static ?string $model = Plant::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->label('Nama Tanaman'),
                Forms\Components\TextInput::make('scientific_name')
                    ->required()
                    ->label('Nama Ilmiah'),
                Forms\Components\Textarea::make('description')
                    ->label('Deskripsi'),
                Forms\Components\FileUpload::make('image')
                    ->label('Gambar Tanaman'),
                Forms\Components\Select::make('island_id')
                    ->relationship('island', 'name')
                    ->label('Pulau')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Nama Tanaman')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('scientific_name')->label('Nama Ilmiah')->sortable(),
                Tables\Columns\TextColumn::make('island.name')->label('Pulau')->sortable()->searchable(),
                Tables\Columns\ImageColumn::make('image')->label('Gambar'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListPlants::route('/'),
            'create' => Pages\CreatePlant::route('/create'),
            'edit' => Pages\EditPlant::route('/{record}/edit'),
        ];
    }
}