<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\SimpleController;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\DoController;
use App\Http\Controllers\DemoController;
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
Route::get('test',[TestController::class,'index']);
Route::get('simple',[SimpleController::class,'checked']);
Route::get('simple1',[SimpleController::class,'check']);
Route::get('practice',[PracticeController::class,'practice']);
Route::get('books',[DoController::class,'book']);
Route::get('demo',[DemoController::class,'index']);

