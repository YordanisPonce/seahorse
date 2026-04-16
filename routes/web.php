<?php

use App\Http\Controllers\TrackVisitController;
use Illuminate\Support\Facades\Route;

Route::get('/', TrackVisitController::class)->name('visit.track');