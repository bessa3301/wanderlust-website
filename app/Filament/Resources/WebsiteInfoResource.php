<?php

namespace App\Filament\Resources;

use App\Enum\LangsEnum;
use App\Filament\Resources\WebsiteInfoResource\Pages;
use App\Filament\Resources\WebsiteInfoResource\RelationManagers;
use App\Models\WebsiteInfo;
use App\Models\WebsitePage;
use Filament\Forms;
use Filament\Forms\Components\BelongsToSelect;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;

class WebsiteInfoResource extends Resource
{
    protected static ?string $model = WebsiteInfo::class;
    protected static ?string $navigationIcon = 'heroicon-o-translate';
    protected static ?string $recordTitleAttribute = 'key';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('key')->required(),
                RichEditor::make('value')->required(),
                Select::make('lang')->options([
                    LangsEnum::BRAZILIAN_PORTUGUESE => 'Brazilian Portuguese',
                    LangsEnum::UNITED_STATES_ENGLISH => 'United States English',
                ])->required(),
                BelongsToSelect::make('page_id')->relationship('page', 'page'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('key'),
                TextColumn::make('page_id')
                    ->label('page')
                    ->formatStateUsing(fn (string $state): string => __(WebsitePage::find(intval($state))->name))
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListWebsiteInfos::route('/'),
            'create' => Pages\CreateWebsiteInfo::route('/create'),
            'edit' => Pages\EditWebsiteInfo::route('/{record}/edit'),
        ];
    }
}
