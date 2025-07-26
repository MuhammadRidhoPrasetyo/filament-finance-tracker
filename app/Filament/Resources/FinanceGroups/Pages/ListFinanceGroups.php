<?php

namespace App\Filament\Resources\FinanceGroups\Pages;

use App\Filament\Resources\FinanceGroups\FinanceGroupResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListFinanceGroups extends ListRecords
{
    protected static string $resource = FinanceGroupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
