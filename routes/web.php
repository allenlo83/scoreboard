<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\StandingController;

Route::group(['prefix' => 'api', 'as' => 'api.', 'middleware'=>[]], function ()
{
    Route::get('/get-schedules', [ScheduleController::class, 'index'])->name('index');
    Route::get('/get-standings', [StandingController::class, 'index'])->name('index');
});

Route::get('/{vue_capture?}', function () {
    return view('index');
})->where('vue_capture', '[\/\w\.-]*');
