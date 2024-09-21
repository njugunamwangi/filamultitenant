<?php

namespace App\Filament\Company\Resources\NoteResource\Pages;

use App\Filament\Company\Resources\NoteResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewNote extends ViewRecord
{
    protected static string $resource = NoteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
