<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;

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

Route::get('/order/ticket', [OrderController::class, 'index']);
Route::post('/order/ticket/create', [OrderController::class, 'createTicket']);
Route::get('/order/ticket/print/{id}', [OrderController::class, 'printTicket']);

Route::get('/user/login', [LoginController::class, 'index']);
Route::post('/user/login/dologin', [LoginController::class, 'dologin']);


Route::get('user/register', [RegisterController::class, 'index']);
Route::post('user/register/doregis', [RegisterController::class, 'doregis']);

Route::get('/user/dashboard', [HomeController::class, 'index'])->middleware('auth');
Route::get('/user/dashboard/logout', [HomeController::class, 'logout'])->middleware('auth');

Route::get('/user/dashboard/order', [HomeController::class, 'orderList'])->middleware('auth');
Route::get('/user/dashboard/order/update/{id}', [HomeController::class, 'orderUpdate'])->middleware('auth');
Route::post('/user/dashboard/order/update/process', [HomeController::class, 'orderUpdateProccess'])->middleware('auth');
Route::get('/user/dashboard/order/delete/{id}', [HomeController::class, 'orderDelete'])->middleware('auth');

Route::get('/user/dashboard/checking', [HomeController::class, 'checkingList'])->middleware('auth');
Route::post('/user/dashboard/checking/data', [HomeController::class, 'checkingOrder'])->middleware('auth');

Route::get('/user/dashboard/report', [HomeController::class, 'reportOrderList'])->middleware('auth');
