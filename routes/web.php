<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestingController;
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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/add-Admin', [Controller::class, 'test']);

Route::get('/export-excel', [AdminController::class, 'exportIntoExcel']);
Route::get('/export-CSV', [AdminController::class, 'exportIntoCSV']);


Route::get('/send-notification', [NotificationController::class, 'sendOfferNotification']);
