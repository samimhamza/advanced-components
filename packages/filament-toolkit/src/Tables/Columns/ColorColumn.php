<?php

namespace SamimHamza\FilamentToolkit\Tables\Columns;

use Filament\Tables\Columns\Column;
use Filament\Tables\Columns\Concerns\CanBeValidated;
use Filament\Tables\Columns\Concerns\CanUpdateState;
use Filament\Tables\Columns\Contracts\Editable;

class ColorColumn extends Column implements Editable
{
    use CanBeValidated, CanUpdateState;
    protected string $view = 'filament-toolkit::tables.columns.color-column';
}
