<?php

use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\SchoolClass\IndexController;
use App\Http\Controllers\SchoolClass\ShowController;
use App\Http\Controllers\SchoolClass\StoreController;
use App\Http\Controllers\SchoolClass\UpdateController;
use App\Http\Controllers\SchoolClass\CreateController;
use App\Http\Controllers\SchoolClass\DestroyController;
use App\Http\Controllers\SchoolClass\EditController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [Authcontroller::class, 'loginView'])->name('login-view')->middleware('guest');
Route::post('/login', [Authcontroller::class, 'loginPost'])->name('login-post')->middleware('guest');
Route::get('/register', [Authcontroller::class, 'registerView'])->name('register-view')->middleware('guest');
Route::post('/register', [Authcontroller::class, 'registerPost'])->name('register-post')->middleware('guest');
Route::post('/logout', [Authcontroller::class, 'logout'])->name('logout')-> middleware('auth');

Route::name('students.')->middleware(['role:student,teacher', 'auth'])->prefix('students')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('index');
    Route::get('/create', [StudentController::class, 'create'])->name('create');
    Route::get('/{student}', [StudentController::class, 'show'])->name('show');
    Route::get('/{student}/edit', [StudentController::class, 'edit'])->name('edit');
    Route::post('/', [StudentController::class, 'store'])->name('store');
    Route::put('/{student}', [StudentController::class, 'update'])->name('update');
    Route::delete('/{student}', [StudentController::class, 'destroy'])->name('destroy');
});

Route::name('teachers.')->middleware(['role:teacher', 'auth'])->prefix('teachers')->group(function () {
    Route::get('/', [TeacherController::class, 'index'])->name('index');
    Route::get('/{id}', [TeacherController::class, 'show'])->name('show')->whereNumber('id');
    Route::get('/create', [TeacherController::class, 'create'])->name('create');
    Route::get('/{id}/edit', [TeacherController::class, 'edit'])->name('edit');
    Route::post('/', [TeacherController::class, 'store'])->name('store');
    Route::put('/{id}', [TeacherController::class, 'update'])->name('update');
    Route::delete('{id}', [TeacherController::class, 'destroy'])->name('destroy');
});


Route::name('classes.')->middleware(['role:teacher', 'auth'])->prefix('classes')->group(function () {
    Route::get('/', IndexController::class)->name('index');
    Route::get('/{id}', ShowController::class)->name('show')->whereNumber('id');
    Route::get('/create', CreateController::class)->name('create');
    Route::get('/{id}/edit', EditController::class)->name('edit');
    Route::post('/', StoreController::class)->name('store');
    Route::put('/{id}', UpdateController::class)->name('update');
    Route::delete('/{id}', DestroyController::class)->name('destroy');
});

Route::resource('majors', MajorController::class)->middleware(['role:teacher', 'auth']);