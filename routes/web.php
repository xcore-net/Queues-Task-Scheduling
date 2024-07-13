<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jobController;
use App\Http\Controllers\FlowerController;

use App\Http\Controllers\LanguageController;
use App\Jobs\redirectJob;
use Illuminate\Support\Facades\Context;


use App\Models\User;
use Illuminate\Support\Facades\Log;




Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/flower', [FlowerController::class, 'index']);

Route::get('/dispatch-job', [jobController::class,'dis']);
// Route::get('/dispatch-job', [jobController::class,'collections1']);



Route::get('/page',function(){
    return view('page');
});

Route::get('/lang',[LanguageController::class , 'change'])->name('user.lang');


Route::get('/', function () {
    // User::all();
    // User::First();
    $account = request()->input('account',1);

    Context::add('selected_account',[$account]);
   // dd(Context::get('selected_account'));   
    log::info('look at');
    return view('welcome');
});



// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
