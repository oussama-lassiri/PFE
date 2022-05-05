<?php

use App\Http\Controllers\second_page;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\last_page_controller;
use App\Http\Controllers\second_page_controller;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {return view('welcome');});

Route::get('/first_page', function(){
    return view('first_page.index');
})->name('first_page.index');

Route::get('nav', function () {
    return view('nav');
})->name('nav');

Route::get('second_page/appartement', [second_page_controller::class, 'appartement']);
Route::get('second_page/maisson_villa', [second_page_controller::class, 'maisson_villa']);
Route::get('second_page/magasin', [second_page_controller::class, 'magasin'])->name('second_page.magasin');
Route::get('second_page/terrain_ferme', [second_page_controller::class, 'terrain_ferme']);
Route::post('second_page/store', [second_page_controller::class, 'store'])->name('second_page.store');

Route::resource('last_page', last_page_controller::class) ; 

Auth::routes();