<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return to_route('series.index');
});

Route::resource('/series', SeriesController::class)
    ->only(['index','create','store', 'destroy']);
