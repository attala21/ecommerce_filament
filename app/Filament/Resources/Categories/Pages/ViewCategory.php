<?php

namespace App\Filament\Resources\Categories\Pages;

use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;
use App\Filament\Resources\Categories\CategoryResource;

class ViewCategory extends ViewRecord
{
    protected static string $resource = CategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('back')
                ->label('Back to Categories')
                ->url(CategoryResource::getUrl('index'))
                ->icon('heroicon-o-arrow-left')
                ->color('secondary'),
        ];
    }
}
