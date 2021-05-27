<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToeflRegisterController;
use App\Http\Controllers\ScheduleController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ScheduleController::class, 'getAll']);
Route::view('thank-you', 'toefl-registration-thanks');
Route::post('registerToefl', [ToeflRegisterController::class, 'registerToefl']);

Route::view('__admin', 'dashboard');
