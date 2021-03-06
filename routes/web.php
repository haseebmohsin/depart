<?php

use App\Http\Livewire\Dashboard;
use App\Http\Livewire\DriverConductorForm;
use App\Http\Livewire\DriversConductors;
use App\Http\Livewire\Travelers;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->middleware('guest')->name('landing');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', Dashboard::class)->name('dashboard');

Route::get('/travelers', Travelers::class)->name('travelers');

Route::middleware(['auth:sanctum', 'verified'])->get('/driversConductors', DriversConductors::class )->name('driversConductors');
Route::middleware(['auth:sanctum', 'verified'])->get('/driverConductorForm', DriverConductorForm::class)->name('driverConductorForm');

