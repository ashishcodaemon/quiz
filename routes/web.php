<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RegisterController;

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
Route::post('/register',[RegisterController::class,'save']);
Route::get("/{id}/{opt}",[QuestionController::class,'show']);
Route::post("/{id}",[QuestionController::class,'next']);
Route::get("/result",[QuestionController::class,'result']);


