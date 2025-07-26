<?php

namespace App\Filament\Resources\FinanceGroups\Pages;

use App\Filament\Resources\FinanceGroups\FinanceGroupResource;
use Filament\Resources\Pages\CreateRecord;

class CreateFinanceGroup extends CreateRecord
{
    protected static string $resource = FinanceGroupResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();

        return $data;
    }
}
