<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\usersController;
use App\Http\Controllers\Eventscontroller;
use App\Http\Controllers\projectcontroller;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\FootballLineupController;
use App\Http\Controllers\BasketballLineupController;
use App\Http\Controllers\VolleyballLineupController;
use App\Http\Controllers\MatchRecoredController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\LeagueController;
use App\Http\Controllers\TwilioSMSController;




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

Route::get('/', [HomeController::class, 'home'])->name('home');



Route::middleware('auth')->group(function () {
    Route::get('/email_verfication', [VerifyEmailController::class, 'email_verfication'])->name('verify_email');
    // Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware(['auth', 'VerifyUser'])->group(function () {
Route::get('/Dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

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
Route::post('/admin/users/{user}/toggle-status', 'UsersController@toggleUserStatus')->name('admin.users.toggle-status');

// messages
Route::get('/Search_Contact', 'MessageController@SearchContact')->name('Search_Contact');


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
Route::get('/eventedit/{id}', [EventsController::class, 'update'])->name('events.update');
Route::post('/eventsupdate/{id}', [EventsController::class, 'edit'])->name('events.edit');
Route::get('/events/allshow', [Eventscontroller::class, 'index'])->name('events.index');
Route::get('/events/new/show', [EventsController::class, 'eventdisplay'])->name('events.newevent');
Route::get('/events/show/detail', [Eventscontroller::class, 'detail'])->name('events.detail');
Route::get('/events/show/{id}', [Eventscontroller::class, 'show'])->name('events.show');
Route::get('/eventsdelete/{id}', [Eventscontroller::class, 'destroy'])->name('events.destroy');


// football lineup
Route::get('/football/lineup/create', [FootballLineupController::class, 'create'])->name('football_lineup.create');
Route::post('/add/football/lineup', [FootballLineupController::class, 'store'])->name('football_lineup.register');
Route::get('/footballlineup/{id}', [FootballLineupController::class, 'update'])->name('football_lineup.update');
Route::post('/footballlineup/{id}', [FootballLineupController::class, 'edit'])->name('football_lineup.edit');
Route::get('/footballlineupshow', [FootballLineupController::class, 'index'])->name('football_lineup.index');
Route::get('/showfootballlineup/{id}', [FootballLineupController::class, 'show'])->name('football_lineup.show');
Route::get('/footballlineupdelete/{id}', [FootballLineupController::class, 'destroy'])->name('football_lineup.destroy');

// basketball lineup
Route::get('/basketball/lineup/create', [BasketballLineupController::class, 'create'])->name('basketball_lineup.create');
Route::post('/add/basketball/lineup', [BasketballLineupController::class, 'store'])->name('basketball_lineup.register');
Route::get('/basketballlineup/{id}', [BasketballLineupController::class, 'update'])->name('basketball_lineup.update');
Route::post('/basketball/lineup/{id}', [BasketballLineupController::class, 'edit'])->name('basketball_lineup.edit');
Route::get('/basketball/lineup/shows', [BasketballLineupController::class, 'index'])->name('basketball_lineup.index');
Route::get('/basketball/lineup/show/{id}', [BasketballLineupController::class, 'show'])->name('basketball_lineup.show');
Route::get('/basketballlineupdelete/{id}', [BasketballLineupController::class, 'destroy'])->name('basketball_lineup.destroy');

// volleyball lineup
Route::get('/volleyball/lineup/create', [VolleyballLineupController::class, 'create'])->name('volleyball_lineup.create');
Route::post('/add/volleyball/lineup', [VolleyballLineupController::class, 'store'])->name('volleyball_lineup.register');
Route::get('/volleyballlineup/{id}', [VolleyballLineupController::class, 'update'])->name('volleyball_lineup.update');
Route::post('/volleyballlineup/{id}', [VolleyballLineupController::class, 'edit'])->name('volleyball_lineup.edit');
Route::get('/volleyball/lineup/show', [VolleyballLineupController::class, 'index'])->name('volleyball_lineup.index');
Route::get('/showvolleyballlineup/{id}', [VolleyballLineupController::class, 'show'])->name('volleyball_lineup.show');
Route::get('/volleyballlineupdelete/{id}', [VolleyballLineupController::class, 'destroy'])->name('volleyball_lineup.destroy');

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

//leagues
Route::get('/manage/league', [LeagueController::class, 'index'])->name('leagues.index');
Route::get('/create/league', [LeagueController::class, 'create'])->name('leagues.create');
Route::get('update-league/{leagues}', [LeagueController::class,'update'])->name('leagues.update');
Route::post('update-league/{leagues}', [LeagueController::class, 'edit'])->name('leagues.edit');
Route::get('/show/league/{id}', [LeagueController::class, 'show'])->name('leagues.show');
Route::get('/deleteleagues/{id}', [LeagueController::class, 'destroy'])->name('leagues.destroy');

// venue
Route::get('/creat/evenue', [VenueController::class, 'create'])->name('venue.create');
Route::post('/add/venue', [VenueController::class, 'store'])->name('venue.register');
Route::get('/venue/edit/{id}', [VenueController::class, 'update'])->name('venue.update');
Route::post('/venue/update/{id}', [VenueController::class, 'edit'])->name('venue.edit');
Route::get('/show/all/venue', [VenueController::class, 'index'])->name('venue.index');
Route::get('/venue/show/{id}', [VenueController::class, 'show'])->name('venue.show');
Route::delete('/deletevenue/{id}', [VenueController::class, 'destroy'])->name('venue.destroy');


// club
Route::get('/createclub', [ClubController::class, 'create'])->name('clubs.create');
Route::post('/addclub', [ClubController::class, 'store'])->name('clubs.register');
Route::get('/clubedit/{id}', [ClubController::class, 'update'])->name('clubs.update');
Route::post('/clubupdate/{id}', [ClubController::class, 'edit'])->name('clubs.edit');
Route::get('/showallclub', [ClubController::class, 'index'])->name('clubs.index');
Route::get('/clubhow/{id}', [ClubController::class, 'show'])->name('clubs.show');
Route::get('/deleteclub/{id}', [ClubController::class, 'destroy'])->name('clubs.destroy');

//Players Route
Route::get('/showallplayer', [PlayerController::class, 'index'])->name('players.index');
Route::get('/assignplayer', [PlayerController::class, 'assign'])->name('players.assign');
Route::post('/storeplayer', [PlayerController::class, 'store'])->name('players.store');


// project
Route::get('/projectcreate', [projectcontroller::class, 'create'])->name('project.create');
Route::post('/addproject', [projectcontroller::class, 'store'])->name('project.register');
Route::get('/projectupdate/{id}', [projectcontroller::class, 'update'])->name('project.update');
Route::post('/projectedit/{id}', [projectcontroller::class, 'edit'])->name('project.edit');
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



Route::fallback(function () {
    return view('errors.404');
});

// sms varification
Route::get('sendSMS', [TwilioSMSController::class, 'index']);
// games
Route::get('detail/football', [HomeController::class, 'football'])->name('football');
Route::get('detail/vollyball', [HomeController::class, 'vollyball'])->name('vollyball');
Route::get('detail/basketball', [HomeController::class, 'basketball'])->name('basketball');
Route::get('detail/culturalgames', [HomeController::class, 'culturalgames'])->name('culturalgames');

// contact
Route::get('contact-us', [ContactController::class, 'index'])->name('contact-us');
Route::get('/aboutAs', [ContactController::class, 'aboutAs'])->name('aboutas');
Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');

require __DIR__.'/auth.php';
