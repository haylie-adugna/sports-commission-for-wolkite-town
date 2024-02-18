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
use App\Http\Controllers\LineupController;
use App\Http\Controllers\MatchRecoredController;
use App\Http\Controllers\VenueController;



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
Route::get('/Dashboard', [HomeController::class, 'index'])->name('dashboard');

// Users
Route::get('users', 'UsersController@index')->name('admin.users.index');
Route::get('users/create', 'UsersController@create')->name('admin.users.create');
Route::post('users', 'UsersController@store')->name('admin.users.store');
Route::get('users/{user}', 'UsersController@show')->name('admin.users.show');
Route::get('users/{user}/edit', 'UsersController@edit')->name('admin.users.edit');
Route::put('users/{user}', 'UsersController@update')->name('admin.users.update');
Route::get('/useranalaysis', [usersController::class, 'analaysis'])->name('users.analaysis');
Route::delete('users/{user}', 'UsersController@destroy')->name('admin.users.destroy');
Route::delete('users/destroy', 'UsersController@massDestroy')->name('admin.users.massDestroy');


// Permissions
Route::get('permissions', 'PermissionsController@index')->name('admin.permissions.index');
Route::get('permissions/create', 'PermissionsController@create')->name('admin.permissions.create');
Route::post('permissions', 'PermissionsController@store')->name('admin.permissions.store');
Route::get('permissions/{permission}', 'PermissionsController@show')->name('admin.permissions.show');
Route::get('permissions/{permission}/edit', 'PermissionsController@edit')->name('admin.permissions.edit');
Route::put('permissions/{permission}', 'PermissionsController@update')->name('admin.permissions.update');
Route::delete('permissions/{permission}', 'PermissionsController@destroy')->name('admin.permissions.destroy');
Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('admin.permissions.massDestroy');

// Roles
Route::get('roles', 'RolesController@index')->name('admin.roles.index');
Route::get('roles/create', 'RolesController@create')->name('admin.roles.create');
Route::post('roles', 'RolesController@store')->name('admin.roles.store');
Route::get('roles/{role}', 'RolesController@show')->name('admin.roles.show');
Route::get('roles/{role}/edit', 'RolesController@edit')->name('admin.roles.edit');
Route::put('roles/{role}', 'RolesController@update')->name('admin.roles.update');
Route::delete('roles/{role}', 'RolesController@destroy')->name('admin.roles.destroy');
Route::delete('roles/destroy', 'RolesController@massDestroy')->name('admin.roles.massDestroy');




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

// lineup
Route::get('/footballlineupcreate', [LineupController::class, 'createfootball'])->name('footballlineup.create');
Route::get('/volleyballlineupcreate', [LineupController::class, 'createvolleyball'])->name('volleyballlineup.create');
Route::get('/basketballlineupcreate', [LineupController::class, 'createbasketball'])->name('basketballlineup.create');
Route::get('/tennislineupcreate', [LineupController::class, 'createtennis'])->name('tennislineup.create');
Route::post('/addlineup', [LineupController::class, 'store'])->name('lineup.register');
Route::get('/lineupupdate/{id}', [LineupController::class, 'edit'])->name('lineup.update');
Route::get('/lineupallshow', [LineupController::class, 'index'])->name('lineup.index');
Route::get('/lineupshow/{id}', [LineupController::class, 'show'])->name('lineup.show');
Route::get('/lineupdelete/{id}', [LineupController::class, 'destroy'])->name('lineup.destroy');

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

// venue
Route::get('/createvenue', [VenueController::class, 'create'])->name('venue.create');
Route::post('/addvenue', [VenueController::class, 'store'])->name('venue.register');
Route::get('/venueedit/{id}', [VenueController::class, 'update'])->name('venue.update');
Route::post('/venueupdate/{id}', [VenueController::class, 'edit'])->name('venue.edit');
Route::get('/showallvenue', [VenueController::class, 'index'])->name('venue.index');
Route::get('/venuehow/{id}', [VenueController::class, 'show'])->name('venue.show');
Route::get('/deletevenue/{id}', [VenueController::class, 'destroy'])->name('venue.destroy');


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

// matchsrecored
Route::get('/creatematchsrecored', [MatchRecoredController::class, 'create'])->name('matchsrecored.create');
Route::post('/addmatchsrecored', [MatchRecoredController::class, 'store'])->name('matchsrecored.register');
Route::get('/matchsrecorededit/{id}', [MatchRecoredController::class, 'update'])->name('matchsrecored.update');
Route::post('/matchsrecoredupdate/{id}', [MatchRecoredController::class, 'edit'])->name('matchsrecored.edit');
Route::get('/showallmatchsrecored', [MatchRecoredController::class, 'index'])->name('matchsrecored.index');
Route::get('/matchsrecoredhow/{id}', [MatchRecoredController::class, 'show'])->name('matchsrecored.show');
Route::get('/deletematchsrecored/{id}', [MatchRecoredController::class, 'destroy'])->name('matchsrecored.destroy');

});




// contact
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
require __DIR__.'/auth.php';
