<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\testController;
use App\Http\Controllers\TrainerController;
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
    return view('cms.parent');
});

Route::resource('/companies', CompanyController::class);
Route::resource('/students', StudentController::class);
Route::resource('/courses', CourseController::class);
Route::resource('/trainers', TrainerController::class);
Route::resource('/divisions', DivisionController::class);

Route::get('/course', [testController::class,"course"]);
Route::get('/trainer', [testController::class,"trainer"]);