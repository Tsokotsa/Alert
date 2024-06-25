<?php

use App\Http\Controllers\DefaultController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SmsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// General Midleware for Auth
Route::middleware('auth')->group(function () {
    Route::get('land', [DefaultController::class, 'land'])->name('default');


// SMS Routes
Route::post('/send-test-sms', [SmsController::class, "send_test"])->name('send-test-sms');

});

Route::get('/', function () {
    return view('sign-in');
});

Route::get('/compose-email', function () {
    return view('compose-email');
});

Route::post('/create-campaign', function (Request $request) {
    return $request;
});


// END OF SMS ROUTES
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



