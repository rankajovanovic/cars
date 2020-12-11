<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsControllor;

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


    return view('welcome', ['name' => 'Ranka', 'age' => '26']);
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/cars', [CarsControllor::class, 'index'])->name('cars');
Route::get('/cars/{car}', [CarsControllor::class, 'show'])->name('car');
