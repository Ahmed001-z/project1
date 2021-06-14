<?php

//use App\Http\api_Controller\StudentController;
use App\Http\Controllers\api_controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('api')->group( function () {
    Route::post('login', [RegisterController::class, 'login']);
    Route::post('register', [RegisterController::class, 'register']);
    Route::post('logout', [RegisterController::class, 'logout']);
});

Route::middleware('api')->group(function (){

    Route::get('create', [StudentController::class, 'create']);


});
