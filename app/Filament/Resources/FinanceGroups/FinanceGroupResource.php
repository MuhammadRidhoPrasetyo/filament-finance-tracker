<?php

namespace App\Filament\Resources\FinanceGroups;

use BackedEnum;
use Filament\Tables\Table;
use App\Models\FinanceGroup;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\FinanceGroups\Pages\EditFinanceGroup;
use App\Filament\Resources\FinanceGroups\Pages\ViewFinanceGroup;
use App\Filament\Resources\FinanceGroups\Pages\ListFinanceGroups;
use App\Filament\Resources\FinanceGroups\Pages\CreateFinanceGroup;
use App\Filament\Resources\FinanceGroups\Schemas\FinanceGroupForm;
use App\Filament\Resources\FinanceGroups\Tables\FinanceGroupsTable;
use App\Filament\Resources\FinanceGroups\Schemas\FinanceGroupInfolist;
use App\Filament\Resources\FinanceGroups\RelationManagers\FinanceGroupUsersRelationManager;
use UnitEnum;

class FinanceGroupResource extends Resource
{
    protected static ?string $model = FinanceGroup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;
    protected static ?string $pluralModelLabel = 'Grup Keuangan';
    protected static string | UnitEnum | null $navigationGroup = 'Keuangan';

    public static function form(Schema $schema): Schema
    {
        return FinanceGroupForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return FinanceGroupInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FinanceGroupsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            // UsersRelationManager::class,
            FinanceGroupUsersRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListFinanceGroups::route('/'),
            'create' => CreateFinanceGroup::route('/create'),
            'view' => ViewFinanceGroup::route('/{record}'),
            'edit' => EditFinanceGroup::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery();
    }
}
