<?php

use App\Http\Controllers\QuestionController;
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

//USER ROUTE
Route::get('', [ToeflRegisterController::class, 'registerPage']);
Route::post('registerToefl', [ToeflRegisterController::class, 'registerToefl']);
Route::view('thank-you', 'toefl-registration-thanks');
Route::view('toefl-pre-exam', 'toefl-pre-exam');
Route::view('toefl-example-exam', 'toefl-example-exam');
Route::view('toefl-exam', 'toefl-exam');

//ADMIN ROUTE
Route::view('__admin', 'dashboard');
Route::get('data-question', [QuestionController::class, 'questionPage']);


//QUESTION API ROUTE
Route::get('/api/question/getAll', [QuestionController::class, 'getAll']);
Route::post('/api/question/save', [QuestionController::class, 'store']);
