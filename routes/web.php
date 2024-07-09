<?php

use App\Http\Controllers\QueueController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/queue',[QueueController::class,'index']);
Route::post('/queue', [QueueController::class,'insert']);
Route::get('/email', [QueueController::class,'sendEmail']);
