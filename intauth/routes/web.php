<?php

use Illuminate\Support\Facades\Route;
use app\http\Controllers\UserControllers;
use app\http\Controllers\User\HomeControllers;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\LeaveController;


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

Auth::routes();

Route::get('auth/home', [App\Http\Controllers\Auth\HomeController::class, 'index'])->name('auth.home')->middleware('admin');
Route::get('user/home', [App\Http\Controllers\User\HomeControllers::class, 'index'])->name('user.home');
Route::get('attend', [App\Http\Controllers\UserControllers::class, 'indexs'])->name('attand');
Route::get('login/users', [App\Http\Controllers\User\HomeControllers::class, 'show'])->name('login.users');


// routes/web.php


// List all attendance records

// Show the form to create a new attendance record
Route::get('/attendances', [AttendanceController::class, 'indexs'])->name('attendanceindex');

Route::get('/attendance/create', [AttendanceController::class, 'create'])->name('attendance.create');
Route::get('/users/home', [AttendanceController::class, 'index'])->name('user.home');

// Store a new attendance record
Route::post('/attendance', [AttendanceController::class, 'store'])->name('attendance.store');

// Show the form to edit an existing attendance record
Route::get('/attendance/{attendance}/edit', [AttendanceController::class, 'edit'])->name('attendance.edit');

// Update an existing attendance record
Route::put('/attendance/{attendance}', [AttendanceController::class, 'update'])->name('attendance.update');

// Delete an existing attendance record
Route::delete('/attendance/{attendance}', [AttendanceController::class, 'destroy'])->name('attendance.destroy');



// leave 
Route::get('/leaves/index', [LeaveController::class, 'index'])->name('leaves.index');
Route::get('/leaves/create', [LeaveController::class, 'create'])->name('leaves.create');

Route::post('/leaves/store', [LeaveController::class, 'store'])->name('leaves.store');


//admin panel
Route::get('/attview', [AttendanceController::class, 'ind'])->name('attendanceView');
