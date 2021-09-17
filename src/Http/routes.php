<?php

use TTLMM\Deepglint\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('laravel-deepglint', Controllers\LaravelDeepglintController::class.'@index');