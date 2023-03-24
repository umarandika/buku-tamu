<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('user');
})->name('user');

Route::get('/login', function () {
    return view('login');
})->name('login');


Route::post("user/store",[UserController::class, 'storetamu'])->name('storetamu');


Route::get('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');



Route::group(['middleware' => ['auth']], function () {
    Route::get('/add', [TamuController::class, 'index'])->name('home');
    Route::post('/store', [TamuController::class, 'store'])->name('store');
    Route::get('/delete/{id}', [TamuController::class, 'destroy'])->name('delete');
});
