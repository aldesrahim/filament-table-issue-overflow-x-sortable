<?php

namespace App\Filament\Pages;

use App\Models\User;
use Filament\Pages\Page;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables;
use Filament\Tables\Table;

class UserPage extends Page implements HasTable
{
    use InteractsWithTable;
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.user-page';

    public function table(Table $table): Table
    {
        return $table
            ->query(User::query())
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email_verified_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('word1')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('word2')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('word3')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('word4')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('word5')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('word6')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('word7')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('word8')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('word9')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('word10')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('word11')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('word12')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('word13')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('word14')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('word15')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('word16')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('word17')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('word18')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable(),
            ]);
    }
}
