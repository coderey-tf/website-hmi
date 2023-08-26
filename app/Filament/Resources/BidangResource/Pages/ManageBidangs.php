<?php

namespace App\Filament\Resources\BidangResource\Pages;

use App\Filament\Resources\BidangResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Illuminate\Contracts\Support\Htmlable;

class ManageBidangs extends ManageRecords
{
    protected static string $resource = BidangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTitle(): string|Htmlable
    {
        return "Bidang-Bidang";
    }
}
