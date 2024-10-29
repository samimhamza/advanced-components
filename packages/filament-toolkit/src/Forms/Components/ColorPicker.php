<?php

namespace SamimHamza\FilamentToolkit\Forms\Components;

use Filament\Forms\Components\Field;

class ColorPicker extends Field
{
    protected string $view = 'filament-toolkit::forms.components.color-picker';

    public int | \Closure | null $width = null;

    public function width(int | \Closure | null $width): static
    {
        $this->width = $width;
        return $this;
    }

    public function getWidth(): ?int
    {
        return $this->evaluate($this->width);
    }
}
