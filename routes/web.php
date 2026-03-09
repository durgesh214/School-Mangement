<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ResultController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/forgot-password', [ForgotPasswordController::class,'show'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class,'send'])->name('password.email');
Route::get('/register', [RegisterController::class,'show'])->name('register');
Route::post('/register', [RegisterController::class,'store']);
Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard')->middleware('auth');
Route::resource('schools', SchoolController::class);
Route::resource('students', StudentController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('subjects', SubjectController::class);
Route::resource('attendances', AttendanceController::class);
Route::resource('exams', ExamController::class);
Route::resource('results', ResultController::class);


