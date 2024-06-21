<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestionAnswerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ServiceController;

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

Route::get('/', [IndexController::class, 'welcome'])->name('welcome');
Route::get('/neurorehab', [IndexController::class, 'landing'])->name('landing');
Route::get('/all-methods', [IndexController::class, 'allMethods'])->name('all-methods');
Route::get('/methods/{slug}', [IndexController::class, 'showMethods'])->name('all-methods');
Route::get('/methods/{slug}', [IndexController::class, 'showMethods'])->name('all-methods');
Route::post('/order-create', [IndexController::class, 'addOrder'])->name('add-order');


require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/posts',PostController::class);
    Route::resource('/users',UserController::class);
    Route::resource('/question_answers',QuestionAnswerController::class);
    Route::resource('/orders',OrderController::class);
    Route::resource('/services',ServiceController::class);


});
