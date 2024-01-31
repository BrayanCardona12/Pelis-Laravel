<?php


use App\Http\Controllers\PeliculasController;
use App\Http\Controllers\DirectoresController;
use App\Http\Controllers\ProductorasController;
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

Route::get('/pel', function () {
    return view('client.pelis');
});


Auth::routes();




Route::resource('Pelis', PeliculasController::class)->middleware('auth');
Route::resource('Dire', DirectoresController::class)->middleware('auth');
Route::resource('Prodc', ProductorasController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::group(['middleware'=>'auth'], function () {
    
// });