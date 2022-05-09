<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AvailabilityController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserInformationController;
use App\Http\Controllers\UsersController;
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
Route::get('job-Subtypes', [JobController::class, 'getAllJobTypes']);
Route::get('availabilities', [AvailabilityController::class, 'jobUsers']);
 Route::post('user/updateValidConfirm', [UsersController::class, 'updateValidity']);
Route::post('images', [AvailabilityController::class, 'upload'])->name('images');


Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('user', function (Request $request) {
        return $request->user();
    });
    Route::put('users', [UsersController::class, 'update']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('availabilities', [AvailabilityController::class, 'create']);
    Route::put('availabilities', [AvailabilityController::class, 'update']);
    Route::get('my-availabilities', [AvailabilityController::class, 'myJobs']);
    Route::post('user-info', [UserInformationController::class, 'addInfo']);
    Route::get('user/{userId}', [UserInformationController::class, 'getUserInfo']);
    Route::get('userAll', [UserInformationController::class, 'getAllUserInfo']);
    Route::post('user/updatestatus', [UsersController::class, 'updateValidity']);
     Route::post('user/updatevalidity', [UsersController::class, 'updateStatus']);
    Route::post('user-info/{userInfoId}', [UserInformationController::class, 'patchInfo']);
    Route::delete('user-info/{userInfoId}', [UserInformationController::class, 'deleteInfo']);
    Route::post('book', [BookingController::class, 'create']);
    Route::get('bookings/scheduled', [BookingController::class, 'scheduledBookings']);
    Route::get('bookings/scheduledAll', [BookingController::class, 'scheduledBookingsAdmin']);
    Route::get('bookings/jobs', [BookingController::class, 'jobBookings']);
    Route::post('bookings/updatestatus', [BookingController::class, 'patchBooking']);
});
