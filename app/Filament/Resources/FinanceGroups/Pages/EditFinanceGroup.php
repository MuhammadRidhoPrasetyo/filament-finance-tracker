<?php

namespace App\Filament\Resources\FinanceGroups\Pages;

use App\Filament\Resources\FinanceGroups\FinanceGroupResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditFinanceGroup extends EditRecord
{
    protected static string $resource = FinanceGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
