<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AvailabilityController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserInformationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Public Routes
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::get('job-types', [JobController::class, 'getJobTypes']);
Route::get('job-types/{type}', [JobController::class, 'getJobByType']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('user', function (Request $request) {
        return $request->user();
    });
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('availability', [AvailabilityController::class, 'create']);
    Route::put('availability', [AvailabilityController::class, 'update']);
    Route::post('user-info', [UserInformationController::class, 'addInfo']);
    Route::get('user/{userId}', [UserInformationController::class, 'getUserInfo']);
    Route::post('user-info/{userInfoId}', [UserInformationController::class, 'patchInfo']);
    Route::delete('user-info/{userInfoId}', [UserInformationController::class, 'deleteInfo']);
});
