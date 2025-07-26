<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CrtpostResource\Pages;
use App\Models\Comment;
use App\Models\Crtpost;
use Filament\Forms;
use Filament\Forms\Components\HasManyRepeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables; // استفاده از HasManyRepeater برای رابطه hasMany

class CrtpostResource extends Resource
{
    protected static ?string $model = Crtpost::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    // تنظیمات فرم برای افزودن و ویرایش پست‌ها و نظرات
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->required(),
                TextInput::make('content')->required(),

                // استفاده از HasManyRepeater برای اضافه کردن کامنت‌ها
                HasManyRepeater::make('comments') // این رابطه به مدل Comment متصل است
                    ->relationship('comments') // رابطه hasMany با مدل Comment
                    ->schema([
                        TextInput::make('comment')->required()->label('کامنت'),
                        TextInput::make('rating')->required()->label('امتیاز'),
                        // Forms\Components\Hidden::make('user_id')->default(auth()->id()), // گرفتن شناسه کاربر جاری

                    ])
                    ->defaultItems(1), // تعداد پیش‌فرض کامنت‌ها
            ]);
    }

    // تنظیمات جدول برای نمایش پست‌ها و کامنت‌ها
    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('content')->limit(50),
                Tables\Columns\TextColumn::make('comments.comment')->label('کامنت‌ها')->limit(50), // نمایش کامنت‌ها
                Tables\Columns\TextColumn::make('comments.rating')->label('امتیاز')->limit(50), // نمایش امتیاز
            ])
            ->filters([/* فیلترها */])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    // تنظیم صفحات برای لیست، ایجاد و ویرایش پست‌ها
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCrtposts::route('/'),
            'create' => Pages\CreateCrtpost::route('/create'),
            'edit' => Pages\EditCrtpost::route('/{record}/edit'),
        ];
    }
}
