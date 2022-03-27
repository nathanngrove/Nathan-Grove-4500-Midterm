<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HardwareController;

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
});

Route::get('/hardwares', function () {
    return view('hardware');
});

Route::get('/manufacturers', function () {
    return view('manufacturer');
});

Route::get('/notes', function () {
    return view('note');
});

Route::get('/users', function () {
    return view('person');
});

Route::get('/purchases', function () {
    return view('purchase');
});

Route::get('/db-test', function () {
    try {         
         echo \DB::connection()->getDatabaseName();     
    } catch (\Exception $e) {
          echo 'None';
    }
});

Route::get('/db-migrate', function () {
    Artisan::call('migrate');
    echo Artisan::output();
});

Route::get('/db-migrate-refresh', function () {
    Artisan::call('migrate:refresh');
    echo Artisan::output();
});

Route::resource('/purchases', PurchaseController::class);

Route::resource('/user', PersonController::class);

Route::resource('/notes', NoteController::class);

Route::resource('/manufacturers', ManufacturerController::class);

Route::resource('/hardwares', HardwareController::class);

Route::fallback(function () {
    echo "error";
});
