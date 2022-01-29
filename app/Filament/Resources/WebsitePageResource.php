<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WebsitePageResource\Pages;
use App\Filament\Resources\WebsitePageResource\RelationManagers;
use App\Models\WebsitePage;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;

class WebsitePageResource extends Resource
{
    protected static ?string $model = WebsitePage::class;
    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $recordTitleAttribute = 'page';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('page')->label('Page Name')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('page')->label('Page Name')
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
            'index' => Pages\ListWebsitePages::route('/'),
            'create' => Pages\CreateWebsitePage::route('/create'),
            'edit' => Pages\EditWebsitePage::route('/{record}/edit'),
        ];
    }
}
