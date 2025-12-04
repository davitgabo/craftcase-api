<?php

namespace App\Filament\Resources\PhoneModelResource\Pages;

use App\Filament\Resources\PhoneModelResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPhoneModels extends ListRecords
{
    protected static string $resource = PhoneModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
