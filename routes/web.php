<?php

use App\Http\Controllers\TrackVisitController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/admin');
});

Route::get('/{token}', TrackVisitController::class)->name('visit.track');