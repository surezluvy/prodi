<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
Route::prefix('/admin')->group(function () {
    Route::controller(AdminController::class)->group(function () {

        Route::middleware(['guest'])->group(function () {
            Route::get('/', 'dashboard')->name('admin-dashboard');
        });

        Route::middleware(['guest'])->group(function () {
            Route::get('/login', 'login')->name('login');
            Route::post('/login', 'loginProcess')->name('admin-login');
            Route::get('/test', 'test')->name('test');
            Route::post('/kirim', 'kirim')->name('kirim');
        });

    });
});