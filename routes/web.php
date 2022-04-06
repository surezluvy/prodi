<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Post\CategoryController;
use App\Http\Controllers\Post\PostController;

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
            Route::prefix('/post')->group(function () {
                Route::controller(PostController::class)->group(function () {
                    Route::get('/', 'index')->name('admin-post');
                    Route::get('/add-post', 'addPost')->name('admin-add-post');
                    Route::post('/add-post-process', 'addPostProcess')->name('admin-add-post-process');
                    Route::get('/edit-post/id={id}', 'editPost')->name('admin-edit-post');
                    Route::post('/edit-post-process', 'editPostProcess')->name('admin-edit-post-process');
                    Route::get('/delete-post/id={id}', 'deletePost')->name('admin-delete-post');
                });

                Route::controller(CategoryController::class)->group(function () {
                    Route::get('/category', 'index')->name('admin-category');
                    Route::post('/sort-category', 'sortCategory')->name('admin-sort-category');
                    Route::post('/add-category', 'addCategory')->name('admin-add-category');
                    Route::get('/delete-category/id={id}', 'deleteCategory')->name('admin-delete-category');
                    Route::post('/edit-category/id={id}', 'editCategory')->name('admin-edit-category');
                });
            });
        });

        Route::middleware(['guest'])->group(function () {
            Route::get('/login', 'login')->name('login');
            Route::post('/login', 'loginProcess')->name('admin-login');
            Route::get('/test', 'test')->name('test');
        });

    });
});