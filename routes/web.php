<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostAndPage\MenuController;
use App\Http\Controllers\PostAndPage\PostController;
use App\Http\Controllers\PostAndPage\PageController;
// use App\Http\Controllers\Data\DosenController;
use App\Http\Controllers\Data\CurriculumController;
use App\Http\Controllers\Data\PrestasiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Home\HomeSettingController;
use App\Http\Livewire\MenuL;
use App\Http\Livewire\CategoryL;
use App\Http\Livewire\Dosen;
use App\Http\Livewire\GalleryL;

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
Route::prefix('/')->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/page={id}', 'post')->name('post');
        Route::get('/page-detail={id}', 'postDetail')->name('post-detail');
    });
});
Route::prefix('/admin')->group(function () {
    Route::controller(AdminController::class)->group(function () {

        Route::middleware(['auth'])->group(function () {

            Route::get('/', 'index')->name('admin-dashboard');
            Route::get('/setting', 'setting')->name('admin-setting');
            Route::post('/setting-process', 'settingUpdate')->name('admin-setting-process');

            Route::get('/logout', 'logout')->name('admin-logout');

            Route::prefix('/home')->group(function () {
                Route::controller(HomeSettingController::class)->group(function () {
                    Route::get('/slider', 'index')->name('admin-slider');
                    Route::post('/add-slider', 'addSlider')->name('admin-add-slider');
                    Route::post('/edit-slider/id={id}', 'editSlider')->name('admin-edit-slider');
                    Route::get('/delete-slider/id={id}', 'deleteSlider')->name('admin-delete-slider');
                });
            });

            Route::prefix('/post-and-page')->group(function () {
                Route::controller(PostController::class)->group(function () {
                    Route::get('/', 'index')->name('admin-post');
                    Route::get('/add-post', 'addPost')->name('admin-add-post');
                    Route::post('/add-post-process', 'addPostProcess')->name('admin-add-post-process');
                    Route::get('/edit-post/id={id}', 'editPost')->name('admin-edit-post');
                    Route::post('/edit-post-process', 'editPostProcess')->name('admin-edit-post-process');
                    Route::get('/delete-post/id={id}', 'deletePost')->name('admin-delete-post');
                });

                Route::controller(PageController::class)->group(function () {
                    Route::get('/page', 'index')->name('admin-page');
                    Route::get('/add-page', 'addPage')->name('admin-add-page');
                    Route::post('/add-page-process', 'addPageProcess')->name('admin-add-page-process');
                    Route::get('/edit-page/id={id}', 'editPage')->name('admin-edit-page');
                    Route::post('/edit-page-process', 'editPageProcess')->name('admin-edit-page-process');
                    Route::get('/delete-page/id={id}', 'deletePage')->name('admin-delete-page');
                });

                Route::get('/menu', MenuL::class)->name('admin-menu');
                // Route::controller(MenuController::class)->group(function () {
                //     Route::get('/menu', Menu::class)->name('admin-menu');
                //     Route::post('/sort-menu', 'sortCategory')->name('admin-sort-menu');
                // });
                // Route::controller(CategoryController::class)->group(function () {
                //     Route::get('/category', 'index')->name('admin-category');
                //     Route::post('/sort-category', 'sortCategory')->name('admin-sort-category');
                //     Route::post('/add-category', 'addCategory')->name('admin-add-category');
                //     Route::get('/delete-category/id={id}', 'deleteCategory')->name('admin-delete-category');
                //     Route::post('/edit-category/id={id}', 'editCategory')->name('admin-edit-category');
                // });
                Route::get('/category', CategoryL::class)->name('admin-category');
                Route::get('/gallery', GalleryL::class)->name('admin-gallery');
                Route::controller(MenuController::class)->group(function () {
                //     Route::get('/menu', Menu::class)->name('admin-menu');
                    Route::post('/sort-menu', 'sortCategory')->name('admin-sort-menu');
                });
            });

            Route::prefix('/data')->group(function() {
                Route::prefix('/dosen')->group(function() {
                    Route::controller(DosenController::class)->group(function () {
                        Route::get('/', Dosen::class)->name('admin-dosen');
                        // Route::get('/', 'index')->name('admin-dosen');
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

        });

        Route::middleware(['guest'])->group(function () {
            Route::get('/login', 'login')->name('login');
            Route::post('/login', 'loginProcess')->name('admin-login');

            Route::get('/register', 'register')->name('register');
            Route::post('/register', 'registerProcess')->name('admin-register');
        });

    });
});
