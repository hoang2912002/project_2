<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\TeacherController;
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
    return view('homepage');
})->name('homepage');
Route::get('/login', [AuthController::class , 'login'])->name('login');
Route::post('/login', [AuthController::class , 'processLogin'])->name('processLogin');
Route::middleware('checkLogin')->group(function () {
    Route::get('/logout',[AuthController::class, 'logout'])->name('logout');
    //Quản lý
    Route::group(['controller' => ManagerController::class, 'prefix' => 'manager', 'as' => 'manager.'], function () {

        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::get('/edit/{teacherModel}', 'edit')->name('edit');
        Route::post('/update/{teacherModel}', 'index')->name('update');
        Route::delete('/destroy/{teacherModel}', 'destroy')->name('destroy');
    });
    //Giáo viên
    Route::group(['controller' => TeacherController::class, 'prefix' => 'teacher', 'as' => 'teacher.'], function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::get('/edit/{teacherModel}', 'edit')->name('edit');
        Route::post('/update/{teacherModel}', 'index')->name('update');
        Route::delete('/destroy/{teacherModel}', 'destroy')->name('destroy');
    });
});
