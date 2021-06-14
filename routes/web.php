<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\test2Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\majorsController;

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

Route::group(['middleware'=>'auth'],function (){
    Route::group(['prefix'=>'dashboard'],function (){
        Route::get('/', [test2Controller::class, 'index'])->name('dashboard');
        Route::get('/users', [UserController::class, 'index']);
        Route::get('/users/create', [UserController::class, 'create']);
        Route::post('/users/save', [UserController::class, 'store']);
        Route::get('/users/delete/{id}', [UserController::class, 'destroy']);
        Route::get('/users/{user}/edit', [UserController::class, 'edit']);
    });
});

Route::group(['prefix'=>'student'],function (){

    Route::get("/create",[StudentController::class, 'create']);
    Route::any("/store",[StudentController::class, 'store']);


});

Route::group(['prefix'=>'company'],function (){

    Route::get("/create",[CompanyController::class, 'create']);
    Route::get("/index",[CompanyController::class, 'index']);
    Route::any("/store",[CompanyController::class, 'store']);

});

Route::group(['prefix'=>'major'],function (){

    Route::get('/create',[majorsController::class, 'create']);
    Route::get('/index',[majorsController::class, 'index']);
    Route::any('/store',[majorsController::class, 'store']);

});


require __DIR__.'/auth.php';



