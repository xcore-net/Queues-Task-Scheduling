<?php

use App\Http\Controllers\Api\ApiController;
use Illuminate\Support\Facades\Route;

Route::post('/show', [ApiController::class, 'showCollection']);
Route::post('/filterAge', [ApiController::class, 'filterAge']);

Route::get('/users', [ApiController::class, 'getUsersBulk']);

require __DIR__.'/auth.php';