<?php
// dd('hre');


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main;
// use App\Http\Controllers\Api_key;


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
Route::get('/api', [App\Http\Controllers\HomeController::class, 'api'])->name('api');

// Route::get('/api', [App\Http\Controllers\api::class, 'api'])->name('api');
// Route::get('api_key', 'Api_key@api_key');



Route::get('/', function () {
    return view('welcome');
});
// Route::get('/apis', function () {
//         return view('home');
//     });
// Route::get('/banner', function () {
//     return view('create-banner');
// });
// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/api', [Api_key::class, 'index']);
// Route::get('/index', 'Main')->name('index');
// Route::get('user', [Main::class, 'index']);




