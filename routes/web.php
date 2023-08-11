<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[EmployeeController::class,'index']);
Route::get('/employee-add', [EmployeeController::class,'create']);
Route::post('/employe-store', [EmployeeController::class,'store']);
Route::get('/edit-employe/{id}', [EmployeeController::class,'edit']);
Route::put('/employe-update/{id}', [EmployeeController::class,'update']);
Route::get('/delete-employe/{id}', [EmployeeController::class,'destroy']);

