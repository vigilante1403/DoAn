<?php

use App\Http\Controllers\ResetPasswordController;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\ForgotPasswordController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('reset-password', [ResetPasswordController::class,'sendMail'])->name('reset-password');
// Route::post('reset-password/{token}', [ResetPasswordController::class]);
// Route::get('reset-password/?token={token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::controller(ResetPasswordController::class)->group(function(){
    Route::post('reset-password-now','reset')->name('password.reset');
});
// Route::post('reset-password-now', [ResetPasswordController::class,'reset'])->name('password.reset');
Route::resource('password', ResetPasswordController::class);


