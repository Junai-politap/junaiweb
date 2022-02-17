<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;



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

Route::get('iar', [WebController::class, 'iar']);
Route::get('sidia', [WebController::class, 'sidia']);
Route::get('sidul', [WebController::class, 'sidul']);
Route::get('simadu_qr', [WebController::class, 'simadu_qr']);
Route::get('simadu', [WebController::class, 'simadu']);
Route::get('simanja', [WebController::class, 'simanja']);
Route::get('simantan', [WebController::class, 'simantan']);
Route::get('simara', [WebController::class, 'simara']);
Route::get('simona', [WebController::class, 'simona']);
Route::get('sirembo', [WebController::class, 'sirembo']);
Route::get('sivensa', [WebController::class, 'sivensa']);
Route::get('vaksinasi', [WebController::class, 'vaksinasi']);

