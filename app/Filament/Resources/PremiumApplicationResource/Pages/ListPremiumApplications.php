<?php

namespace App\Filament\Resources\PremiumApplicationResource\Pages;

use App\Filament\Resources\PremiumApplicationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPremiumApplications extends ListRecords
{
    protected static string $resource = PremiumApplicationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
