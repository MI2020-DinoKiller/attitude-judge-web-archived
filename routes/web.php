<?php

use App\Http\Controllers\SearchController;
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
    return view('index');
})->name('index');

Route::get('/whitelist', function () {
    return view('whitelist');
})->name('whitelist');

Route::post('/search', [SearchController::class, 'gotcha'])->name('getsearch');

Route::get('/search/{url}', [SearchController::class, 'show'])->name('search2');

Route::get('/search/{url}/{page}', [SearchController::class, 'show'])->name('search');
