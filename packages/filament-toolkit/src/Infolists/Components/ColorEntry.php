<?php

namespace SamimHamza\FilamentToolkit\Infolists\Components;

use Filament\Infolists\Components\Entry;

class ColorEntry extends Entry
{
    protected string $view = 'filament-toolkit::infolists.components.color-entry';

    public int | \Closure | null $width = null;

    public function width(int | \Closure | null $width): static
    {
        $this->width = $width;
        return $this;
    }

    public function getWidth(string $state): ?int
    {
        return $this->evaluate($this->width, [
            'state' => $state
        ]);
    }
}
