<?php

namespace SamimHamza\FilamentToolkit\Forms\Components;

use SamimHamza\FilamentToolkit\Concerns\CanBeSection;
use Filament\Forms\Components\Component;

class Section extends Component
{
    use CanBeSection;

    protected string $view = 'filament-toolkit::section';
}
