<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\usersController;
use App\Http\Controllers\Announcmentcontroller;
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
});

Route::middleware(['auth', 'VerifyUser'])->group(function () {
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('/userscreate', [usersController::class, 'create'])->name('users.create');
Route::post('/adduser', [usersController::class, 'store'])->name('users.register');
Route::get('/usersupdate', [usersController::class, 'edit'])->name('users.update');
Route::get('/showall', [usersController::class, 'index'])->name('users.index');
Route::get('/usersshow', [usersController::class, 'show'])->name('users.show');
Route::delete('/usersdelete', [usersController::class, 'destroy'])->name('users.destroy');


Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


Route::get('/Announcmentcreate', [Announcmentcontroller::class, 'create'])->name('announcment.create');
Route::get('/Announcmentupdate', [Announcmentcontroller::class, 'edit'])->name('announcment.update');
Route::get('/Announcmentshow', [Announcmentcontroller::class, 'show'])->name('announcment.show');
Route::delete('/Announcmentdelete', [Announcmentcontroller::class, 'destroy'])->name('announcment.destroy');



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
