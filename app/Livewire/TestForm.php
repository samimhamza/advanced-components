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
        $input = TextInput::make('email')
            ->label(function ($state) {
                return $state;
            })
            ->livewire($this);

        return view(
            'livewire.test-form',
            [
                'input' => $input
            ]
        );
    }
}
