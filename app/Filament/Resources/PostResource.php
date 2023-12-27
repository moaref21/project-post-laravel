<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Closure;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon =  'heroicon-o-clipboard-document-list';
 


    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Card::make()
            ->schema([
                Grid::make(columns:2)->schema([

                    TextInput::make('title')->required()->label('العنوان'),
                ]),
             
                MarkdownEditor::make('body')->required()->label('النص'),

                
           
                ])->columnSpan(span:8),

                Card::make()
                ->schema([
                    
                FileUpload::make('image_path')->required()->disk('public')->directory('images')->label('اختر الصورة'),
                Select::make('category_id')->label('Category')
                ->options(Category::all()->pluck('title','id'))->label('اختر تصنيف'),
                ])->columnSpan(span:4),
            ])->columns(columns:12);
            
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->label('العنوان'),
                TextColumn::make('user.name')->label('اسم المستخدم'),
                TextColumn::make('category.title')->label('الصنف'),
                ImageColumn::make('image_path')->label('الصورة'),
                TextColumn::make('body')->label('النص'),
               
            ])
            ->filters([
               
            ])
            ->actions([
                
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                // Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
