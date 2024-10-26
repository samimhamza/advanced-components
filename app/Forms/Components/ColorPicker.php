<?php

namespace App\Forms\Components;

use Filament\Forms\Components\Field;

class ColorPicker extends Field
{

    public int | \Closure | null $width = null;

    protected string $view = 'forms.components.color-picker';

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
