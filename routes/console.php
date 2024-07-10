<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

// Artisan::command('inspire', function () {
//     $this->comment(Inspiring::quote());
// })->purpose('Display an inspiring quote')->hourly();

Schedule::call(function () {
    DB::table('fff')->insert(['hhhhh'=>"shahd"]);
})->everyFiveSeconds();

// Schedule::call(function () {
//     DB::table('fff')->delete();
// })->everyFiveSeconds();




//Schedule::command('queue:work --stop-when-empty')->everyMinute();

// Schedule::command('schedule:list')->everyThirtySeconds();

//php artisan schedule:list