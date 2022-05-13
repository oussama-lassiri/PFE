<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\last_page_controller;
use App\Http\Controllers\second_page_controller;
use App\Http\Controllers\AnnonceController;
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
Route::get('second_page/user', [second_page_controller::class, 'user'])->name('user_space');
Route::get('second_page/store', [second_page_controller::class, 'store'])->name('second_page.store');
Route::put('second_page/update_user', [second_page_controller::class, 'update_user'])->name('second_page.update_user');
Route::put('second_page/update_annonce', [second_page_controller::class, 'update_annonce'])->name('second_page.update_annonce');
Route::get('second_page/edit', [second_page_controller::class, 'edit'])->name('second_page.edit');

Route::resource('last_page', last_page_controller::class) ; 

Auth::routes();
Route::get('service',[\App\Http\Controllers\AnnonceController::class,'displayService'])->name('displayService');
Route::get('terrain',[\App\Http\Controllers\AnnonceController::class,'displayTerrain'])->name('displayTerrain');
Route::get('immobilier',[\App\Http\Controllers\AnnonceController::class,'displayImmobilier'])->name('displayImmobilier');
