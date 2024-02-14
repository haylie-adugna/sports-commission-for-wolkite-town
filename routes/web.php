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
use App\Http\Controllers\GamesController;
use App\Http\Controllers\MatchController;



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
    // Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware(['auth', 'VerifyUser'])->group(function () {
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::get('/userscreate', [usersController::class, 'create'])->name('users.create');
Route::post('/adduser', [usersController::class, 'store'])->name('users.register');
Route::get('/usersedit/{id}', [usersController::class, 'edit'])->name('users.edit');
Route::post('/usersupdate/{id}', [usersController::class, 'update'])->name('users.update');
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


//games
Route::get('/creategames', [GamesController::class, 'create'])->name('games.create');
Route::post('/addgames', [GamesController::class, 'store'])->name('games.register');
Route::get('/gameedit/{id}', [GamesController::class, 'update'])->name('games.update');
Route::post('/gamesupdate/{id}', [GamesController::class, 'edit'])->name('games.edit');
Route::get('/showallgames', [GamesController::class, 'index'])->name('games.index');
Route::get('/gamesshow/{id}', [GamesController::class, 'show'])->name('games.show');
Route::get('/deletegames/{id}', [GamesController::class, 'destroy'])->name('games.destroy');

// match
Route::get('/creatematch', [MatchController::class, 'create'])->name('matchs.create');
Route::post('/addmatch', [MatchController::class, 'store'])->name('matchs.register');
Route::get('/matchsedit/{id}', [MatchController::class, 'update'])->name('matchs.update');
Route::post('/matchsupdate/{id}', [MatchController::class, 'edit'])->name('matchs.edit');
Route::get('/showallmatch', [MatchController::class, 'index'])->name('matchs.index');
Route::get('/matchshow/{id}', [MatchController::class, 'show'])->name('matchs.show');
Route::get('/deletematch/{id}', [MatchController::class, 'destroy'])->name('matchs.destroy');



// club
Route::get('/createclub', [ClubController::class, 'create'])->name('clubs.create');
Route::post('/addclub', [ClubController::class, 'store'])->name('clubs.register');
Route::get('/clubedit/{id}', [ClubController::class, 'update'])->name('clubs.update');
Route::post('/clubupdate/{id}', [ClubController::class, 'edit'])->name('clubs.edit');
Route::get('/showallclub', [ClubController::class, 'index'])->name('clubs.index');
Route::get('/clubhow/{id}', [ClubController::class, 'show'])->name('clubs.show');
Route::get('/deleteclub/{id}', [ClubController::class, 'destroy'])->name('clubs.destroy');


// project
Route::get('/projectcreate', [projectcontroller::class, 'create'])->name('project.create');
Route::post('/addproject', [projectcontroller::class, 'store'])->name('project.register');
Route::get('/projectupdate/{id}', [projectcontroller::class, 'edit'])->name('project.update');
Route::get('/showallproject', [projectcontroller::class, 'index'])->name('project.index');
Route::get('/projectshow/{id}', [projectcontroller::class, 'show'])->name('project.show');
Route::get('/deleteproject/{id}', [projectcontroller::class, 'destroy'])->name('project.destroy');

});




// contact
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
require __DIR__.'/auth.php';
