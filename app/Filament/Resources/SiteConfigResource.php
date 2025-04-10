<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiteConfigResource\Pages;
use App\Filament\Resources\SiteConfigResource\RelationManagers;
use App\Models\SiteConfig;
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

class SiteConfigResource extends Resource
{
    protected static ?string $model = SiteConfig::class;

    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected static ?string $navigationGroup = 'Settings';
    protected static ?int $navigationSort    = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Name')
                    ->required()
                    ->string()
                    ->maxLength(255)
                    ->readOnly(),
                TextInput::make('key')
                    ->label('Key')
                    ->required()
                    ->string()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true)
                    ->hidden(),
                Select::make('type')
                    ->label('Type')
                    ->required()
                    ->options([
                        'text'     => 'Text',
                        'textarea' => 'Text Area',
                        'color'    => 'Color',
                        'url'      => 'URL',
                        'number'   => 'Number',
                        'email'    => 'Email',
                        'file'     => 'File',
                    ])
                    ->reactive()
                    ->visible(fn($get) => Auth::id() === 1)
                    ->afterStateUpdated(function ($state, $set) {
                        if ($state === 'text') {
                            $set('value', '');
                        } elseif ($state === 'textarea') {
                            $set('value', '');
                        } elseif ($state === 'file') {
                            $set('value', null);
                        } elseif ($state === 'color') {
                            $set('value', '');
                        } elseif ($state === 'url') {
                            $set('value', '');
                        } elseif ($state === 'number') {
                            $set('value', '');
                        } elseif ($state === 'email') {
                            $set('value', '');
                        }
                    })
                    ->hidden(),

                FileUpload::make('file')
                    ->label('Value')
                    ->image()
                    ->directory('site-configs')
                    ->disk('public')
                    ->enableOpen()
                    ->maxSize(2048)
                    ->deleteUploadedFileUsing(function ($file, $record) {
                        Storage::disk('public')->delete($file);
                        $record->update([
                            'file' => null,
                        ]);
                    })
                    ->visible(fn($get) => $get('type') === 'file'),
                TextInput::make('value')
                    ->label('Value')
                    ->string()
                    ->maxLength(255)
                    ->visible(fn($get) => $get('type') === 'text'),
                RichEditor::make('value')
                    ->label('Value')
                    ->string()
                    ->maxLength(2000)
                    ->columnSpan('full')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'underline',
                        'redo',
                        'undo',
                    ])
                    ->visible(fn($get) => $get('type') === 'textarea'),
                TextInput::make('value')
                    ->label('Value')
                    ->string()
                    ->type('color')
                    ->visible(fn($get) => $get('type') === 'color'),
                TextInput::make('value')
                    ->label('Value')
                    ->string()
                    ->type('url')
                    ->visible(fn($get) => $get('type') === 'url'),
                TextInput::make('value')
                    ->label('Value')
                    ->numeric()
                    ->visible(fn($get) => $get('type') === 'number'),
                TextInput::make('value')
                    ->label('Value')
                    ->email()
                    ->visible(fn($get) => $get('type') === 'email'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('order', 'asc')
            ->reorderable('order')
            ->paginated(false)
            ->columns([
                TextColumn::make('name')
                    ->label('Name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('key')
                    ->label('Key')
                    ->sortable()
                    ->searchable()
                    ->hidden(),
                TextColumn::make('type')
                    ->label('Type')
                    ->sortable()
                    ->searchable()
                    ->hidden(),
                TextColumn::make('value')
                    ->label('Value')
                    ->sortable()
                    ->searchable()
                    ->limit(50)
                    ->getStateUsing(function ($record) {
                        if ($record->type === 'file') {
                            return $record->file;
                        } else {
                            return strip_tags($record->value);
                        }

                        return null;
                    }),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make(),
                // ]),
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
            'index'  => Pages\ListSiteConfigs::route('/'),
            // 'create' => Pages\CreateSiteConfig::route('/create'),
            // 'edit'   => Pages\EditSiteConfig::route('/{record}/edit'),
        ];
    }
}
