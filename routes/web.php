<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminsController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/about-us', [HomeController::class, 'about']);
Route::get('/contact-us', [HomeController::class, 'contact']);

// Legal Pages
Route::get('/terms-and-conditions', [HomeController::class, 'terms']);
Route::get('/privacy-policy', [HomeController::class, 'privacy']);
Route::get('/copyright', [HomeController::class, 'copyright']);
Route::get('/frequently-asked-questions', [HomeController::class, 'faq']);
Route::get('/frequently-asked-questions/{slung}', [HomeController::class, 'faq_single']);