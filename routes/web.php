<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\CategoryberitaController;
use App\Http\Controllers\CategorynewsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardNewsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\QqgamesController;
use App\Http\Controllers\TopupController;
use App\Models\News;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home Controller
Route::get('/', [HomeController::class,'index']);
Route::get('/about', [HomeController::class,'about']);
// NewsController
Route::get('/news',[NewsController::class,'index']);
Route::get('/news/{news:slug}',[NewsController::class,'detail']);


// Topup Controller
Route::get('/topup', [TopupController::class,'index']);
Route::get('/topup/store', [TopupController::class,'store']);
// Media Controller
Route::get('/media',[MediaController::class,'index']);


// Auth Controller
Route::get('/login', [AuthController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard/changepassword', [AuthController::class,'changepassword'])->middleware('auth');
Route::post('/dashboard/changepassword/{user:id}', [AuthController::class,'updatepassword'])->middleware('auth');
Route::get('/forgotpassword',[AuthController::class,'forgotpassword'])->middleware('guest');
Route::post('/forgotpassword', [AuthController::class,'sendresetlink'])->name('passwordlink');
Route::get('/forgotpassword/reset/{token}', [AuthController::class,'showresetform'])->name('resetpasswordform');
Route::post('/forgotpassword/reset', [AuthController::class,'resetpassword'])->name('resetpassword');

// Dashboard Controller
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('/dashboard/categorynews', CategorynewsController::class)->middleware('auth');
Route::resource('/dashboard/news', DashboardNewsController::class)->middleware('auth');
