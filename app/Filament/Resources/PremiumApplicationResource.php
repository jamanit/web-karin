<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PremiumApplicationResource\Pages;
use App\Filament\Resources\PremiumApplicationResource\RelationManagers;
use App\Models\PremiumApplication;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\DatePicker;

use Filament\Tables\Columns\ViewColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\HtmlString;
use Illuminate\Support\Facades\Auth;

class PremiumApplicationResource extends Resource
{
    protected static ?string $model = PremiumApplication::class;

    protected static ?string $navigationIcon = 'heroicon-o-sparkles';
    protected static ?int $navigationSort     = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->string()
                    ->maxLength(255),
                TextInput::make('price')
                    ->label('Price')
                    ->required()
                    ->numeric()
                    ->maxLength(255),
                TextInput::make('discount')
                    ->label('Discount')
                    ->nullable()
                    ->string()
                    ->maxLength(255),
                RichEditor::make('description')
                    ->label('Description')
                    ->nullable()
                    ->string()
                    ->maxLength(500)
                    ->columnSpan('full')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'underline',
                        'redo',
                        'undo',
                    ]),
                FileUpload::make('image')
                    ->label('Image')
                    ->nullable()
                    ->image()
                    ->directory('premium-applications')
                    ->disk('public')
                    ->enableOpen()
                    // ->enableDownload()
                    ->maxSize(2048)
                    ->deleteUploadedFileUsing(function ($file, $record) {
                        Storage::disk('public')->delete($file);
                        $record->update([
                            'image' => null,
                        ]);
                    }),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('order', 'desc')
            ->reorderable('order')
            ->columns([
                TextColumn::make('title')
                    ->label('Title')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('price')
                    ->label('Price')
                    ->searchable()
                    ->sortable()
                    ->getStateUsing(function ($record) {
                        return 'Rp. ' . number_format($record->price, 0, ',', '.');
                    }),
                TextColumn::make('discount')
                    ->label('Discount')
                    ->searchable()
                    ->sortable(),
                // TextColumn::make('description')
                //     ->label('Description')
                //     ->sortable()
                //     ->searchable()
                //     ->limit(50)
                //     ->getStateUsing(function ($record) {
                //         return strip_tags($record->description);
                //     }),
                ImageColumn::make('image')
                    ->label('Image')
                    ->sortable()
                    ->searchable()
                    ->width(50)
                    ->height(50),
                TextColumn::make('created_at')
                    ->label('Created At')
                    ->sortable()
                    ->searchable()
                    ->dateTime()
                    ->since()
                    ->dateTimeTooltip(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListPremiumApplications::route('/'),
            // 'create' => Pages\CreatePremiumApplication::route('/create'),
            // 'edit' => Pages\EditPremiumApplication::route('/{record}/edit'),
        ];
    }
}
