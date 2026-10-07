<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FilmsController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReservationSeatController;
use App\Http\Controllers\ReservationSnackController;
use App\Http\Controllers\SallesController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\ShowtimeController;
use App\Http\Controllers\SnackController;
use App\Http\Controllers\TicketController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);

Route::middleware(['auth:sanctum', 'admin'])->prefix('admin')->group(function () {

    Route::post('/films', [FilmsController::class, 'store']);
    Route::put('/films/{id}', [FilmsController::class, 'update']);
    Route::delete('/films/{id}', [FilmsController::class, 'destroy']);

    Route::post('/salles', [SallesController::class, 'store']);
    Route::put('/salles/{id}', [SallesController::class, 'update']);
    Route::delete('/salles/{id}', [SallesController::class, 'destroy']);

    Route::post('/seats', [SeatController::class, 'store']);
    Route::put('/seats/{id}', [SeatController::class, 'update']);
    Route::delete('/seats/{id}', [SeatController::class, 'destroy']);

    Route::post('/showtimes', [ShowtimeController::class, 'store']);
    Route::delete('/showtimes/{id}', [ShowtimeController::class, 'destroy']);
    Route::put('/showtimes/{id}', [ShowtimeController::class, 'update']);

    Route::post('/snacks', [SnackController::class, 'store']);
    Route::put('/snacks/{id}', [SnackController::class, 'update']);
    Route::delete('/snacks/{id}', [SnackController::class, 'destroy']);

    Route::put('/reservations/{id}', [ReservationController::class, 'update']);
    Route::delete('/reservations/{id}', [ReservationController::class, 'destroy']);

    Route::put('/reservation-seats/{id}', [ReservationSeatController::class, 'update']);
    Route::delete('/reservation-seats/{id}', [ReservationSeatController::class, 'destroy']);

    Route::put('/reservation-snacks/{id}', [ReservationSnackController::class, 'update']);
    Route::delete('/reservation-snacks/{id}', [ReservationSnackController::class, 'destroy']);

    Route::put('/tickets/{id}', [TicketController::class, 'update']);
});

Route::get('/films', [FilmsController::class, 'index']);
Route::get('/films/{id}', [FilmsController::class, 'show']);

Route::get('/salles', [SallesController::class, 'index']);
Route::get('/salles/{id}', [SallesController::class, 'show']);

Route::get('/seats', [SeatController::class, 'index']);
Route::get('/seats/{id}', [SeatController::class, 'show']);

Route::get('/showtimes', [ShowtimeController::class, 'index']);
Route::get('/showtimes/{id}', [ShowtimeController::class, 'show']);

Route::get('/snacks', [SnackController::class, 'index']);
Route::get('/snacks/{id}', [SnackController::class, 'show']);


Route::middleware('auth:sanctum')->group(function () {

    Route::post('/reservations', [ReservationController::class, 'store']);
    Route::get('/reservations', [ReservationController::class, 'index']);
    Route::get('/reservations/{id}', [ReservationController::class, 'show']);

    Route::get('/reservation-seats', [ReservationSeatController::class, 'index']);
    Route::get('/reservation-seats/{id}', [ReservationSeatController::class, 'show']);
    Route::post('/reservation-seats', [ReservationSeatController::class, 'store']);

    Route::get('/reservation-snacks', [ReservationSnackController::class, 'index']);
    Route::get('/reservation-snacks/{id}', [ReservationSnackController::class, 'show']);
    Route::post('/reservation-snacks', [ReservationSnackController::class, 'store']);

    Route::get('/payments', [PaymentController::class, 'index']);
    Route::get('/payments/{id}', [PaymentController::class, 'show']);
    Route::post('/payments', [PaymentController::class, 'store']);

    Route::get('/tickets', [TicketController::class, 'index']);
    Route::get('/tickets/{id}', [TicketController::class, 'show']);
    Route::post('/tickets', [TicketController::class, 'store']);
});
