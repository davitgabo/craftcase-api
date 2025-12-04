<?php

namespace App\Filament\Resources\PhoneModelResource\Pages;

use App\Filament\Resources\PhoneModelResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPhoneModel extends EditRecord
{
    protected static string $resource = PhoneModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
