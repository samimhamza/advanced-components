<?php

namespace App\Forms\Components;

use App\Traits\CanBeSection;
use Filament\Forms\Components\Component;

class Section extends Component
{
    use CanBeSection;

    protected string $view = 'livewire.section';
}
