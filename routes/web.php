<?php

use App\Livewire\Form;
use App\Livewire\Navigate\GoBack;
use App\Livewire\Navigate\Start;
use Illuminate\Support\Facades\Route;

Route::get('/', Form::class);
Route::view('/now-go-back', 'now-go-back');

Route::get('/navigate/start', Start::class);
Route::get('/navigate/go-back', GoBack::class);
