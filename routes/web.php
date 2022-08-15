<?php

use App\Http\Controllers\HomeStikar;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\DashboardsController;
use App\Http\Controllers\MotivationsController;
use App\Http\Controllers\RegisterNewStudentsController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\UpdatePasswordController;
use App\Http\Controllers\UsersController;

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

Route::get('/', [HomeStikar::class, 'index']);
Route::post('/logout', [AuthController::class, 'logout']);


Route::middleware(['guest'])->group(function(){
    Route::get('/login', [AuthController::class, 'index']);
    Route::post('/login', [AuthController::class, 'authenticate']);
    Route::get('/PPSB', function(){
        return view('PPSB.index');
    });
    Route::get('/PPSB/register', [RegisterNewStudentsController::class, 'index']);
    Route::post('/PPSB/register', [RegisterNewStudentsController::class, 'store']);
});

Route::middleware(['auth'])->group(function(){
    Route::get('/biodata', [BiodataController::class, 'index']);
    Route::post('/biodata', [BiodataController::class, 'update']);
    Route::get('/dashboard', [DashboardsController::class, 'index']);
    Route::post('/updatePassword', [UpdatePasswordController::class, 'updatePassword']);
});

Route::middleware(['newStudent'])->group(function(){
    //
});

Route::middleware(['admin'])->group(function(){
    Route::resource('/dashboardAdmin/motivations', MotivationsController::class);
});

Route::middleware(['operator'])->group(function(){
    Route::resource('/users', UsersController::class);
    Route::resource('/new_students', StudentsController::class);
});