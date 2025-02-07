<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LetterController;

Route::get('/', [LetterController::class, 'index'])->name('index');