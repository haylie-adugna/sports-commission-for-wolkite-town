<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\usersController;
use App\Http\Controllers\Eventscontroller;
use App\Http\Controllers\projectcontroller;
use App\Http\Controllers\Auth\VerifyEmailController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.home');
});



Route::middleware('auth')->group(function () {
    Route::get('/email_verfication', [VerifyEmailController::class, 'email_verfication'])->name('verify_email');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware(['auth', 'VerifyUser'])->group(function () {
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('/userscreate', [usersController::class, 'create'])->name('users.create');
Route::post('/adduser', [usersController::class, 'store'])->name('users.register');
Route::get('/usersedit/{id}', [usersController::class, 'edit'])->name('users.edit');
Route::get('/usersupdate/{id}', [usersController::class, 'update'])->name('users.update');
Route::get('/showalluser', [usersController::class, 'index'])->name('users.index');
Route::get('/usersshow/{id}', [usersController::class, 'show'])->name('users.show');
Route::get('/useranalaysis', [usersController::class, 'analaysis'])->name('users.analaysis');
Route::get('/usersdelete/{id}', [usersController::class, 'destroy'])->name('users.destroy');


Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // events
Route::get('/eventscreate', [Eventscontroller::class, 'create'])->name('events.create');
Route::post('/addevent', [EventsController::class, 'store'])->name('events.register');
Route::get('/eventsupdate/{id}', [Eventscontroller::class, 'edit'])->name('events.update');
Route::get('/eventsallshow', [Eventscontroller::class, 'index'])->name('events.index');
Route::get('/eventsshow/{id}', [Eventscontroller::class, 'show'])->name('events.show');
Route::get('/eventsdelete/{id}', [Eventscontroller::class, 'destroy'])->name('events.destroy');



Route::get('/create', [ClubController::class, 'create'])->name('club.create');
Route::get('/update', [ClubController::class, 'edit'])->name('club.update');
Route::get('/show', [ClubController::class, 'show'])->name('club.show');
Route::delete('/delete', [ClubController::class, 'destroy'])->name('club.destroy');


Route::get('/projectcreate', [projectcontroller::class, 'create'])->name('sportproject.edit');
Route::get('/projectupdate', [projectcontroller::class, 'edit'])->name('sportproject.update');
Route::get('/projectshow', [projectcontroller::class, 'show'])->name('sportproject.show');
Route::delete('/projectdelete', [projectcontroller::class, 'destroy'])->name('sportproject.destroy');

});




// contact
Route::POST('/', [ContactController::class, 'submitForm'])->name('contactform');
require __DIR__.'/auth.php';
