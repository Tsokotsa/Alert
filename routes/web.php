<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\DefaultController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RolesPermissionController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\TelegramController;
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
    Route::get('/sms/list', [SmsController::class, "index"])->name('list-sms');
    Route::post('/send-test-sms', [SmsController::class, "send_test"])->name('send-test-sms');
    //  Route::get('/getall-sms', [SmsController::class, "getSubscribers"])->name('sms-subscribers');

    // Test Telegram 
    Route::get('/telegram/list', [TelegramController::class, "index"])->name('list-telegram');
    Route::post('/send-test-telegram', [TelegramController::class, "send_test"])->name('send-test-telegram');
    //Route::get('/getall-telegram', [TelegramController::class, "getSubscribers"])->name('telegram-subscribers');

    // Test Email 
    Route::get('/email/list', [EmailController::class, "index"])->name('list-email');
    Route::post('/send-test-email', [EmailController::class, "send_test_Email"])->name('send-test-email');


    // Roles and Permissions
    Route::get('/roles-perm', [RolesPermissionController::class, 'list_roles_perms'])->name('list-role-perm');

    // List Users
    Route::get('/users/list', [UserController::class, 'index'])->name('list-users');


    Route::get('/compose-email', function () {
        return view('compose-email');
    });

    // Campaign 

    Route::post('/create-campaign', [DefaultController::class, "create_Campaign"])->name('create-campaign');

    // CONTACTS
    // List
    Route::get('/contacts/list', [ContactsController::class, 'index'])->name('list-contacts');
    // Add Contact
    Route::post('/contact/add', [ContactsController::class, 'add'])->name('add-contact');


    // END CONTACTS ROUTES 

}); // END OF AUTH GROUP

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
