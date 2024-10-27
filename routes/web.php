<?php

use App\Livewire\DemoForm;
use App\Livewire\DemoInfolist;
use App\Livewire\TestForm;
use Illuminate\Support\Facades\Route;

// Route::get('/', TestForm::class);
// Route::get('/', DemoForm::class);
Route::get('/', DemoInfolist::class);
