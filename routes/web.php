<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main;
// use App\Http\Controllers\PortfolioController;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/banner', function () {
//     return view('create-banner');
// });
// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/main', [Main::class, 'Main']);
// Route::get('/index', 'Main')->name('index');
// Route::get('user', [Main::class, 'index']);




