<?php

namespace App\Livewire;

use App\Components\TextInput;
use Livewire\Component;
use Illuminate\Support\Str;


class TestForm extends Component
{

    public $email;

    public function render()
    {
        TextInput::configureUsing(function ($input) {
            $input->maxLength(10);
        });

        TextInput::macro('foo', fn() => dd('bar'));

        $nameInput = TextInput::make('name')
            ->livewire($this);

        $emailInput = TextInput::make('email')
            ->livewire($this);


        return view(
            'livewire.test-form',
            [
                'nameInput' => $nameInput,
                'emailInput' => $emailInput,
            ]
        );
    }
}
