<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthenticateMiddleware;
use App\Http\Controllers\Backend\StudentController;

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

Route::get('/', function () {
    return view('welcome');
});
/*Backend route*/
Route::get('dashboard/index', [DashboardController::class, 'index'])-> name('dashboard.index')->middleware(AuthenticateMiddleware::class);
Route::get('admin', [AuthController::class, 'index'])-> name('auth.admin')->middleware('login');
Route::post('login',[AuthController::class, 'login'])-> name('auth.login');
Route::get('logout',[AuthController::class, 'logout'])->name('auth.logout');

Route::get('student/sinhvien',[StudentController::class,'sinhvien'])->name('student.sinhvien');