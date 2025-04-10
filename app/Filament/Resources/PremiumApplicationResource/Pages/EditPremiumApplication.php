<?php

namespace App\Filament\Resources\PremiumApplicationResource\Pages;

use App\Filament\Resources\PremiumApplicationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPremiumApplication extends EditRecord
{
    protected static string $resource = PremiumApplicationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
