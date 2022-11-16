<?php

use App\Http\Controllers\CarController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
    Route::get('/cars', [CarController::class, 'index'])
        ->name('cars-index');
    Route::get('/cars/create', [CarController::class, 'create'])
        ->name('cars-create'); 
    Route::post('cars/create/store', [CarController::class, 'store'])
        ->name('cars-store');       
    Route::get('/cars/edit/{carId}', [CarController::class, 'edit'])
        ->name('cars-edit'); 
    Route::put('/cars/edit/{carId}/save', [CarController::class, 'update'])
        ->name('cars-update'); 
});
