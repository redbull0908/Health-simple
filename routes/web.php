<?php
use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AccountController;
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
//main
Route::get('/', [MainController::class, 'main'])->name('main');
//home
Route::get('/services',[HomeController::class,'services_category'])->name('service_category');
Route::get('/our_specialists',[HomeController::class,'doctors'])->name('doctors');
Route::get('/services/{id}',[HomeController::class,'service'])->name('service');
//account
Route::get('sign_up',[AccountController::class,'register'])->name('register');
Route::post('sign_up',[AccountController::class,'save'])->name('save');
Route::get('sign_in',[AccountController::class,'login'])->name('login');
Route::post('sign_in',[AccountController::class,'auth'])->name('auth');
Route::get('logout',[AccountController::class,'logout'])->name('logout');
