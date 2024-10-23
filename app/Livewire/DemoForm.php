<?php

namespace App\Livewire;

use App\Forms\Components\ColorPicker;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Livewire\Component;

class DemoForm extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    public function mount()
    {
        $this->form->fill();
    }

    public function form(Form $form)
    {
        return $form
            ->schema([
                ColorPicker::make('color1')
                    ->default('#ff0000')
            ])->statePath('data');
    }

    public function submit()
    {
        // 
    }
}
