<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('roles', App\Http\Controllers\RoleController::class);


Route::resource('users', App\Http\Controllers\UserController::class);


Route::resource('teachers', App\Http\Controllers\TeacherController::class);


Route::resource('courses', App\Http\Controllers\CourseController::class);


Route::resource('lessons', App\Http\Controllers\LessonController::class);


Route::resource('lessonvideos', App\Http\Controllers\LessonvideoController::class);


Route::resource('questions', App\Http\Controllers\QuestionController::class);


Route::resource('questionoptions', App\Http\Controllers\QuestionoptionController::class);


Route::resource('tests', App\Http\Controllers\TestController::class);
