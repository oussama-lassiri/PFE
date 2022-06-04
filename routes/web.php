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

Route::get('/first_page', function(){
    return view('first_page.index');
})->name('first_page.index');

Route::get('nav', function () {
    return view('nav');
})->name('nav');

Route::get('admin', function () {
    return view('admin_dir.theme');
})->name('theme');

Route::get('admin/statistiques', [second_page_controller::class,'admin_statistique'])->name('admin_statistique');

Route::get('admin/utilisateur/ajout', function () {
    return view('admin_dir.ajoutUser');
})->name('admin_ajout_user');

Route::get('/', [second_page_controller::class, 'welcome'])->name('welcome');
Route::get('second_page/search', [second_page_controller::class, 'search'])->name('search');
Route::get('second_page/resultat', [second_page_controller::class, 'resultat'])->name('resultat');
Route::get('second_page/appartement', [second_page_controller::class, 'appartement']);
Route::get('second_page/maisson_villa', [second_page_controller::class, 'maisson_villa']);
Route::get('second_page/magasin', [second_page_controller::class, 'magasin'])->name('second_page.magasin');
Route::get('second_page/terrain_ferme', [second_page_controller::class, 'terrain_ferme']);
Route::get('second_page/user/{id}', [second_page_controller::class, 'user'])->name('user_space');
Route::get('second_page/store', [second_page_controller::class, 'store'])->name('second_page.store');
Route::get('second_page/update_user', [second_page_controller::class, 'update_user'])->name('second_page.update_user');
Route::put('second_page/update_annonce', [second_page_controller::class, 'update_annonce'])->name('second_page.update_annonce');
Route::get('second_page/edit', [second_page_controller::class, 'edit'])->name('second_page.edit');
Route::get('second_page/delete',[second_page_controller::class,'destroy_bien'])->name('second_page.destroy_bien');
Route::get('last-page/delete',[last_page_controller::class,'delete_annonce'])->name('last_page.delete_annonce');
Route::get('admin',[second_page_controller::class,'admin_area'])->name('admin');
Route::get('admin/utilisateur',[second_page_controller::class,'admin_user'])->name('admin_user');
Route::get('admin/utilisateur/details',[second_page_controller::class,'display_user'])->name('admin_user.display');
Route::get('admin/utilisateur/tools',[second_page_controller::class,'admin_gestion_user'])->name('admin_user.gestion');
Route::get('admin/utilisateur/tools/delete',[second_page_controller::class,'admin_delete_user'])->name('admin_user.delete');
Route::get('admin/utilisateur/tools/etat',[second_page_controller::class,'admin_etat_user'])->name('admin_user.etat');
Route::get('admin/utilisateur/tools/etat/block',[second_page_controller::class,'admin_block_user'])->name('admin_user.block');
Route::get('admin/annonce',[second_page_controller::class,'admin_annonce'])->name('admin_annonce');
Route::get('admin/annonce/details',[second_page_controller::class,'display_annonce'])->name('admin_annonce.display');
Route::get('admin/annonce/tools/etat',[second_page_controller::class,'admin_etat_annonce'])->name('admin_annonce.etat');

Route::resource('last_page', last_page_controller::class);

Auth::routes();
