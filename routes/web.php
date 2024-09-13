<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SystemController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PermissionController;

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

Route::get('/', [HomeController::class,'index']);
Route::get('/fprojects', [HomeController::class,'projects'])->name('frontprojects');
Route::get('/fservices', [HomeController::class,'services'])->name('frontservices');
Route::get('/fsystems', [HomeController::class,'systems'])->name('frontsystems');
Route::resource('contacts', ContactController::class);


Auth::routes();

Route::get('/dashboard', [HomeController::class, 'dash'])->name('home');

Route::prefix('/')
    ->middleware('auth')
    ->group(function () {
        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);

        Route::resource('pdfs', PdfController::class);
        Route::resource('projects', ProjectController::class);
        Route::resource('services', ServiceController::class);
        Route::resource('systems', SystemController::class);
        Route::resource('users', UserController::class);
    });