<?php

namespace App\Filament\Resources\FinanceGroups\RelationManagers;

use App\Models\User;
use Filament\Tables\Table;
use Filament\Actions\CreateAction;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use App\Filament\Resources\FinanceGroups\FinanceGroupResource;
use Filament\Actions\DeleteAction;

class FinanceGroupUsersRelationManager extends RelationManager
{
    protected static string $relationship = 'financeGroupUsers';

    // protected static ?string $relatedResource = FinanceGroupResource::class;

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->label('User')
                    ->options(User::query()->pluck('name', 'id'))
                    ->searchable()
                    ->required()
                    ->unique(),

                Select::make('role')
                    ->options([
                        'owner' => 'Owner',
                        'member' => 'Member',
                    ])
                    ->required(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->heading('Grup Pengguna')
            ->columns([
                TextColumn::make('user.name')->label('User'),
                TextColumn::make('role'),
            ])
            ->headerActions([
                CreateAction::make(), // cukup begini, dia akan ambil schema dari form()
            ])
            ->recordActions([
                DeleteAction::make(),
            ]);
    }
}
