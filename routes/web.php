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

Route::get('nav', function () {
    return view('nav');
})->name('nav');

Route::get('contact', function () {
    return view('contact.index');
})->name('contact');

Route::get('/', [second_page_controller::class, 'welcome'])->name('welcome');
Route::get('/first_page',[second_page_controller::class, 'first_page'])->name('first_page');
Route::get('second_page/search', [second_page_controller::class, 'search'])->name('search');
Route::get('second_page/resultat', [second_page_controller::class, 'resultat'])->name('resultat');
Route::get('second_page/appartement', [second_page_controller::class, 'appartement']);
Route::get('second_page/maisson_villa', [second_page_controller::class, 'maisson_villa']);
Route::get('second_page/magasin', [second_page_controller::class, 'magasin'])->name('second_page.magasin');
Route::get('second_page/terrain_ferme', [second_page_controller::class, 'terrain_ferme']);
Route::get('second_page/user/{id}', [second_page_controller::class, 'user'])->name('user_space');
Route::get('second_page/store', [second_page_controller::class, 'store'])->name('second_page.store');
Route::get('last_page/comment',[second_page_controller::class, 'comment'])->name('comment');
Route::get('second_page/update_user', [second_page_controller::class, 'update_user'])->name('second_page.update_user');
Route::put('second_page/update_annonce', [second_page_controller::class, 'update_annonce'])->name('second_page.update_annonce');
Route::get('second_page/edit', [second_page_controller::class, 'edit'])->name('second_page.edit');
Route::get('second_page/delete',[second_page_controller::class,'destroy_bien'])->name('second_page.destroy_bien');
Route::get('last-page/delete',[last_page_controller::class,'delete_annonce'])->name('last_page.delete_annonce');


Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){
    Route::get('/',[second_page_controller::class,'theme'])->name('theme');

    Route::get('/statistiques', [second_page_controller::class,'admin_statistique'])->name('admin_statistique');

    Route::get('/utilisateur/ajout', function () {
        return view('admin_dir.ajoutUser');
    })->name('admin_ajout_user');

    Route::get('/',[second_page_controller::class,'admin_area'])->name('admin');
    Route::get('/utilisateur',[second_page_controller::class,'admin_user'])->name('admin_user');
    Route::get('/utilisateur/details',[second_page_controller::class,'display_user'])->name('admin_user.display');
    Route::get('/utilisateur/tools',[second_page_controller::class,'admin_gestion_user'])->name('admin_user.gestion');
    Route::get('/utilisateur/tools/delete',[second_page_controller::class,'admin_delete_user'])->name('admin_user.delete');
    Route::get('/utilisateur/tools/etat',[second_page_controller::class,'admin_etat_user'])->name('admin_user.etat');
    Route::get('/utilisateur/tools/etat/block',[second_page_controller::class,'admin_block_user'])->name('admin_user.block');
    Route::get('/annonce',[second_page_controller::class,'admin_annonce'])->name('admin_annonce');

    Route::post('/utilisateur/ajout',[second_page_controller::class,'admin_user_add'])->name('admin_user_add');
    Route::get('/annonce/details',[second_page_controller::class,'display_annonce'])->name('admin_annonce.display');
    Route::get('/annonce/tools/etat',[second_page_controller::class,'admin_etat_annonce'])->name('admin_annonce.etat');
    Route::put('/annonce/tools/edit_annonce', [second_page_controller::class, 'admin_edit_annonce'])->name('admin_annonce.edit');
    Route::get('/annonce/tools', [second_page_controller::class, 'admin_gestion_annonce'])->name('admin_annonce.gestion');

    Route::get('/comments',[second_page_controller::class,'admin_comment'])->name('admin_comment');
    Route::get('/comments/tools/etat',[second_page_controller::class,'admin_etat_comment'])->name('admin_comment.etat');
    Route::get('/comments/tools/delete',[second_page_controller::class,'admin_drop_comment'])->name('admin_comment.delete');
} );


Route::resource('last_page', last_page_controller::class);

Auth::routes();
