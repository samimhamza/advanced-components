<?php

use App\Components\TextInput;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $input = TextInput::make('Email');
    return view('welcome', [
        'input' => $input
    ]);
});
