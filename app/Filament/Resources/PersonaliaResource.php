<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PersonaliaResource\Pages;
use App\Filament\Resources\PersonaliaResource\RelationManagers;
use App\Models\Jabatan;
use App\Models\Personalia;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PersonaliaResource extends Resource
{
    protected static ?string $model = Personalia::class;

    // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Struktur Kepengurusan';
    protected static ?string $navigationLabel = 'Personalia';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('angkatan')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('jurusan')
                            ->required()
                            ->maxLength(255),
                        Select::make('bidang_id')
                            // ->options(BidangBidang::query()->pluck('bidang', 'id'))
                            ->relationship('bidang', 'name')
                            ->live(),
                        Select::make('jabatan_id')
                            ->label('Select Jabatan')
                            ->options(function (callable $get) {
                                $bidangId = $get('bidang_id');

                                if ($bidangId) {
                                    return Jabatan::where('bidang_id', $bidangId)->pluck('name', 'id')->toArray();
                                }
                            }),
                        FileUpload::make('image')
                            ->required()
                            ->image()
                            ->directory('image')
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        $uniqueAngkatan = Personalia::query()->distinct()->pluck('angkatan', 'id');
        // $uniqueAngkatan = $uniqueAngkatan->unique();
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('angkatan')
                    ->sortable(),
                TextColumn::make('jurusan')
                    ->sortable(),
                TextColumn::make('bidang.name')
                    ->sortable(),
                TextColumn::make('jabatan.name'),
                ImageColumn::make('image')
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManagePersonalias::route('/'),
        ];
    }
}
