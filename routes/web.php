<?php

use App\Http\Livewire\AddNewStop;
use App\Http\Livewire\Buses;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\DriverConductorForm;
use App\Http\Livewire\DriversConductors;
use App\Http\Livewire\Landing;
use App\Http\Livewire\SendNotification;
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

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', Landing::class)->name('landing');
    Route::get('/travelers', Travelers::class)->name('travelers');
    Route::get('/download/challan', [Travelers::class, 'downloadChallan'])->name('downloadChallan');
});

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/driversConductors', DriversConductors::class)->name('driversConductors');
    Route::get('/driverConductorForm', DriverConductorForm::class)->name('driverConductorForm');
    Route::get('/buses', Buses::class)->name('buses');
    Route::get('/sendMessage', SendNotification::class)->name('sendMessage');
});


// Route::middleware(['auth:sanctum'])->group(function () {

// });
