<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiStudentController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::post("login", [AuthController::class, 'login']);
// Route::post("register", [AuthController::class, 'register']);

// Route::group(["middleware" => "auth.jwt"], function(){
//     Route::get("logout", [AuthController::class, 'logout']);
//     Route::get('/studet/list',[ApiStudentController::class, 'list']);
//     // Route::resource("tasks","ApiTaskController");
// });

// Route::get('/',[ApiStudentController::class, 'list']);

Route::group([

    'middleware' => 'api',
    'namespace' => 'App\Http\Controllers',
    'prefix' => 'auth'

], function ($router) {

    Route::post('register', 'AuthController@register');
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::get('student/list','ApiStudentController@list');
    Route::get('me', 'AuthController@me');

});
