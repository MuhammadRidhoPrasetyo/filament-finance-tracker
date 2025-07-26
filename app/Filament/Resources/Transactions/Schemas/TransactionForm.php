<?php

namespace App\Filament\Resources\Transactions\Schemas;

use App\Models\Tag;
use App\Models\Account;
use App\Models\Category;
use App\Models\FinanceGroup;
use App\Models\TransactionTag;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DateTimePicker;

class TransactionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('finance_group_id')
                    ->label('Grup Keuangan')
                    ->options(FinanceGroup::query()->pluck('name', 'id'))
                    ->searchable(),
                Select::make('account_id')
                    ->options(Account::query()->pluck('name', 'id'))
                    ->searchable()
                    ->required(),
                Select::make('category_id')
                    ->options(Category::query()->pluck('name', 'id'))
                    ->searchable()
                    ->required(),
                Select::make('type')
                    ->options(['income' => 'Income', 'expense' => 'Expense'])
                    ->required(),
                Select::make('tags')
                    ->searchable()
                    ->options(Tag::query()->pluck('name', 'id'))
                    ->relationship(name: 'tags', titleAttribute: 'name')
                    ->multiple(),
                TextInput::make('amount')
                    ->required()
                    ->numeric(),
                Textarea::make('description')
                    ->default(null)
                    ->columnSpanFull(),
                DateTimePicker::make('date')
                    ->required(),
            ]);
    }
}
