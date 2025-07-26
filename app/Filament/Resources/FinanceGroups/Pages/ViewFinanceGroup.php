<?php

namespace App\Filament\Resources\FinanceGroups\Pages;

use App\Filament\Resources\FinanceGroups\FinanceGroupResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewFinanceGroup extends ViewRecord
{
    protected static string $resource = FinanceGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
