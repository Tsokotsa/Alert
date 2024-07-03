<?php

use App\Http\Controllers\DefaultController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RolesPermissionController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('sign-in');
});

// General Midleware for Auth
Route::middleware('auth')->group(function () {
    Route::get('land', [DefaultController::class, 'land'])->name('default');


// SMS Routes
    Route::post('/send-test-sms', [SmsController::class, "send_test"])->name('send-test-sms');

});

// Test Telgram 

Route::post('/send-test-telegram', [SmsController::class, "send_test_Telegram"])->name('send-test-telegram');

// Test Email 

Route::post('/send-test-email', [SmsController::class, "send_test_Email"])->name('send-test-email');


// Roles and Permissions
Route::get('/roles-perm', [RolesPermissionController::class, 'list_roles_perms'])->name('list-role-perm');

// List Users
Route::get('/users/list', [UserController::class, 'index'])->name('list-users');


Route::get('/compose-email', function () {
    return view('compose-email');
});

Route::post('/create-campaign', function (Request $request) {
    return $request;
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



