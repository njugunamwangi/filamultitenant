<?php

namespace App\Filament\Company\Resources\NoteResource\Pages;

use App\Filament\Company\Resources\NoteResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class CreateNote extends CreateRecord
{
    protected static string $resource = NoteResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['company_id'] = Auth::user()->currentCompany;

        return $data;
    }
}
