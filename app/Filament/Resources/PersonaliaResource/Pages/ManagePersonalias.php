<?php

namespace App\Filament\Resources\PersonaliaResource\Pages;

use App\Filament\Resources\PersonaliaResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Contracts\Support\Htmlable;

class ManagePersonalias extends ManageRecords
{
    protected static string $resource = PersonaliaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTitle(): string|Htmlable
    {
        return "Personalia";
    }
}
