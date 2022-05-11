<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubAdminController;
use App\Http\Controllers\EventAdminController;
use App\Http\Controllers\MembreAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// admin part
Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resources([
            'clubs' => ClubAdminController::class,
            'evenements' => EventAdminController::class,
            'membres' => MembreAdminController::class,
        ]);
    });
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('clubs', [ClubController::class, 'index'])->name('clubs.index');
Route::get('evenements', [EventController::class, 'index'])->name('evenements.index');
Route::get('contacts', [ContactController::class, 'index'])->name('contacts.index');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
