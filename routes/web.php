<?php

use App\Http\Controllers\SearchController;
use App\Models\Hotel;
use App\Models\Room;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HotelsController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoomsController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/search', [SearchController::class, 'index'])->name('search.index');
Route::get('/search/{id}/reservation', [SearchController::class, 'reservation'])->name('search.reservation');
Route::post('/search/reservation/store', [SearchController::class, 'storeReservation'])->name('search.storeReservation');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/hotels', [HotelsController::class, 'index'])->name('hotels.index');
    Route::get('/hotel/{id}/show', [HotelsController::class, 'show'])->name('hotels.show');
    Route::get('/hotel', [HotelsController::class, 'create'])->name('hotels.create');
    Route::post('/hotel', [HotelsController::class, 'store'])->name('hotels.store');
    Route::get('/hotel/{id}/edit', [HotelsController::class, 'edit'])->name('hotels.edit');
    Route::put('/hotel/{id}/update', [HotelsController::class, 'update'])->name('hotels.update');
    Route::delete('/hotel', [HotelsController::class, 'destroy'])->name('hotels.destroy');

    Route::get('/rooms', [RoomsController::class, 'index'])->name("rooms.index");
    Route::get('/room', [RoomsController::class, 'create'])->name('rooms.create');
    Route::post('/room', [RoomsController::class, 'store'])->name('rooms.store');
    Route::get('/room/{id}/edit', [RoomsController::class, 'edit'])->name('rooms.edit');
    Route::put('/room/{id}/update', [RoomsController::class, 'update'])->name('rooms.update');
    Route::delete('/room', [RoomsController::class, 'destroy'])->name('rooms.destroy');

    Route::get('/reservations', [ReservationController::class, 'index'])->name("reservations.index");
    Route::get('/reservation/{id}/edit', [ReservationController::class, 'edit'])->name('reservations.edit');
    Route::put('/reservation/{id}/update', [ReservationController::class, 'update'])->name('reservations.update');
    Route::delete('/reservation', [reservationController::class, 'destroy'])->name('reservations.destroy');
});

require __DIR__.'/auth.php';
