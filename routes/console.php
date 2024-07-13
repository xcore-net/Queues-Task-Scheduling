<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail;
use App\Mail\testEmail;
use Illuminate\Support\Facades\Schedule;


Schedule::call(function () {
    $text = "hello";
    Mail::to('xxxszcbn@gmail.com')->send(new testEmail($text));
})->everyFiveSeconds();

// Artisan::command('inspire', function () {
//     $this->comment(Inspiring::quote());
// })->purpose('Display an inspiring quote')->hourly();

// Schedule::call(function () {
//     DB::table('fff')->insert(['hhhhh'=>"shahd"]);
// })->everyFiveSeconds();



// Schedule::call(function () {
//     DB::table('fff')->delete();
// })->everyFiveSeconds();




//Schedule::command('queue:work --stop-when-empty')->everyMinute();

// Schedule::command('schedule:list')->everyThirtySeconds();

//php artisan schedule:list