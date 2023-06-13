<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

Route::get('/employees',                [EmployeeController::class, 'index']);
Route::post('/employee/store',          [EmployeeController::class, 'store']);
Route::get('/employee/{id}',            [EmployeeController::class, 'show']); 
Route::put('/employee/update/{id}',     [EmployeeController::class, 'update']);
Route::delete('/employee/delete/{id}',  [EmployeeController::class, 'destroy']);
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/registrar', [RegisterController::class,'store']);
Route::post('/ingresar', [LoginController::class,'check']);