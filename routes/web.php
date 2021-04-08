<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TrainingMatrixController;
use App\Http\Controllers\WorkForceController;
use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index', [App\Http\Controllers\HomeController::class, 'index1'])->name('index');


Route::group(['middleware' => ['auth']], function() {
  //------- departments ---------
Route::resource('departments', DepartmentController::class);
//------- Positions ---------
Route::resource('positions', PositionController::class);
//------- Projects ---------
Route::resource('projects', ProjectController::class);
//------- WorkForces ---------
Route::resource('workforces', WorkForceController::class);
//------- Training Matrix ---------
Route::resource('training-matrix', TrainingMatrixController::class);
    });



