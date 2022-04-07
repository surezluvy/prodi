<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Post\CategoryController;
use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\CurriculumController;
use App\Http\Controllers\PrestasiController;

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

            Route::prefix('/dosen')->group(function() {
                Route::controller(DosenController::class)->group(function () {
                    Route::get('/', 'index')->name('admin-dosen');
                    Route::post('/add-dosen', 'addDosen')->name('admin-add-dosen');
                    Route::post('/edit-dosen/id={id}', 'editDosen')->name('admin-edit-dosen');
                    Route::get('/delete-dosen/id={id}', 'deleteDosen')->name('admin-delete-dosen');
                });
            });

            Route::prefix('/kurikulum')->group(function() {
                Route::controller(CurriculumController::class)->group(function () {
                    Route::get('/', 'index')->name('admin-kurikulum');
                    Route::post('/add-kurikulum', 'addKurikulum')->name('admin-add-kurikulum');
                    Route::post('/edit-kurikulum/id={id}', 'editKurikulum')->name('admin-edit-kurikulum');
                    Route::get('/delete-kurikulum/id={id}', 'deleteKurikulum')->name('admin-delete-kurikulum');
                });
            });

            Route::prefix('/prestasi')->group(function() {
                Route::controller(PrestasiController::class)->group(function () {
                    Route::get('/', 'index')->name('admin-prestasi');
                    Route::post('/add-prestasi', 'addPrestasi')->name('admin-add-prestasi');
                    Route::post('/edit-prestasi/id={id}', 'editPrestasi')->name('admin-edit-prestasi');
                    Route::get('/delete-prestasi/id={id}', 'deletePrestasi')->name('admin-delete-prestasi');
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