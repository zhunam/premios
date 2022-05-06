<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PremioController;
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
Route::view('/', 'home');

Auth::routes();

Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('lista', [HomeController::class, 'create'])->name('lista.create');
Route::post('lista', [HomeController::class, 'store'])->name('lista.store');


Route::resource('premio', PremioController::class)->names('premios');