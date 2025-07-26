<?php

namespace App\Filament\Resources\FinanceGroups\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class FinanceGroupForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
            ]);
    }
}
