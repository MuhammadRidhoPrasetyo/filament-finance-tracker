<?php

namespace App\Filament\Resources\Transactions\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Infolists\Components\TextEntry;

class TransactionInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Grid::make()
                ->columns(12)
                ->columnSpanFull()
                ->schema([
                    Section::make('Details')
                        ->inlineLabel()
                        ->columnSpan([
                            'sm' => 1,
                            'lg' => 8,
                            'xl' => 8
                        ])
                        ->schema([
                            TextEntry::make('financeGroup.name')
                                ->label('Grup Keuangan'),

                            TextEntry::make('account.name')
                                ->label('Akun Kas'),

                            TextEntry::make('category.name')
                                ->label('Kategori'),

                            TextEntry::make('type')
                                ->label('Tipe'),

                            TextEntry::make('amount')
                                ->label('Jumlah')
                                ->numeric(),

                            TextEntry::make('date')
                                ->label('Tanggal')
                                ->dateTime(),
                        ]),
                    Section::make('Tag')
                        ->inlineLabel()
                        ->columnSpan(['sm' => 1, 'lg' => 4, 'xl' => 4])
                        ->schema([
                            TextEntry::make('tags.name') // nama relasi dan kolom yang ingin ditampilkan
                                ->label('Tag')
                                ->badge()
                                ->separator(', ')
                        ]),
                ]),
        ]);
    }
}
