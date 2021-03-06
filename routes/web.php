<?php

use App\Http\Controllers\HelloController;
use App\Http\Controllers\CertificationController;
use App\Http\Controllers\RegistrationController;

use Illuminate\Support\Facades\Route;

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

//member_add
Route::get('/registration', [RegistrationController::class,'index']);
Route::post('/registration', [RegistrationController::class,'add']);

//login
Route::get('/login', [CertificationController::class,'index']);
Route::post('/login', [CertificationController::class,'certification']);



//hello
Route::get('/hello', [HelloController::class,'index']);
Route::post('/hello', [HelloController::class,'create']);
Route::post('/hello_done', [HelloController::class,'hello_done']);