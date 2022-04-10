<?php

namespace App\Filament\Resources;

use App\Enum\LangsEnum;
use App\Filament\Resources\TermsAndConditionsResource\Pages;
use App\Filament\Resources\TermsAndConditionsResource\RelationManagers;
use App\Models\TermsAndConditions;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;

class TermsAndConditionsResource extends Resource
{
    protected static ?string $model = TermsAndConditions::class;
    protected static ?string $navigationIcon = 'heroicon-o-badge-check';

    // User should not be able to create more entries apart from the seeder
    public static function canCreate(): bool
    {
        return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                RichEditor::make('term')->required()->label('Write/Edit your terms here'),
                Select::make('lang')->options([
                    LangsEnum::BRAZILIAN_PORTUGUESE => 'Brazilian Portuguese',
                    LangsEnum::UNITED_STATES_ENGLISH => 'United States English',
                    LangsEnum::SPANISH => 'Spanish'
                ])->required()->label('Language'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('term')->limit()->label('Term Contract'),
                TextColumn::make('lang')->label('Language shorthand'),
            ])
            ->filters([
                //
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTermsAndConditions::route('/'),
            'create' => Pages\CreateTermsAndConditions::route('/create'),
            'edit' => Pages\EditTermsAndConditions::route('/{record}/edit'),
        ];
    }
}
