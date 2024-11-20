<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;

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


Route::view('crud','main');
Route::get('crud',[userController::class,'show']);
Route::post('crud',[userController::class,'AddData']);
Route::get('delete/{id}',[userController::class,'delete']);
Route::post('update/{id}', [UserController::class,'update']);
Route::post('update',[userController::class,'update']);
Route::get('view/{id}',[userController::class,'viewrecord']);
Route::get('view',[userController::class,'viewrecord']);