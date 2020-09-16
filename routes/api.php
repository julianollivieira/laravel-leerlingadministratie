<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\API\StudentController;
use App\Http\Controllers\API\OpleidingController;

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

// Route::middleware('auth:api')->get('/login', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => ['web']], function () {
  Route::post('/login', [UserController::class, 'login']);
  Route::post('/logout', [UserController::class, 'logout']);
});

Route::apiResource('studenten', StudentController::class);
Route::apiResource('opleidingen', OpleidingController::class);
