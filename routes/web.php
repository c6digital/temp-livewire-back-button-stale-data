<?php

use App\Livewire\Form;
use Illuminate\Support\Facades\Route;

Route::get('/', Form::class);
Route::view('/now-go-back', 'now-go-back');
