<?php

namespace SamimHamza\FilamentToolkit\Infolists\Components;

use SamimHamza\FilamentToolkit\Concerns\CanBeSection;
use Filament\Infolists\Components\Component;

class Section extends Component
{
    use CanBeSection;
    protected string $view = 'filament-toolkit::section';
}
