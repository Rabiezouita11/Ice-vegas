<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*  Authentification */
 Auth::routes();



 /*  CLIENT */

/*  page affiche client */

Route::get('/home', [App\Http\Controllers\ClientController::class, 'index'])->name('home');
// ->middleware('role:client');

 /*  page affiche categories and son produit */ 

Route::get('/categories_{category}', [ClientController::class, 'show'])->name('categories.show');

/*  page affiche a propos */

Route::get('/Apropos', [App\Http\Controllers\ClientController::class, 'Apropos'])->name('Apropos');

/*  page affiche Contact */

Route::get('/Contact', [App\Http\Controllers\ClientController::class, 'Contact'])->name('Contact');


Route::get('/products_{id}', [ClientController::class, 'showproducts'])->name('products.show');


/*  page subscribe  */

Route::post('/subscribe', [ClientController::class, 'subscribe'])->name('newsletter.subscribe');

/*  page affiche quiz  */


Route::get('/jeux', [App\Http\Controllers\ClientController::class, 'jeux'])->name('jeux');



Route::get('/jouer/{id}', [App\Http\Controllers\ClientController::class, 'showJouer'])->name('jouer.show');


Route::get('/profileClient', [ClientController::class, 'profileClient'])->name('profile.show');


/*  ADMIN */

Route::put('/update-produit/{produit}', [App\Http\Controllers\AdminController::class, 'updateProduit'])->name('updateProduit')->middleware('role:admin');


Route::post('/check-response', [ClientController::class, 'checkResponse']);

Route::post('/verify-response', [App\Http\Controllers\ClientController::class, 'saveResponse'])->name('response.save');

 /*  page affiche admin */ 
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin')->middleware('role:admin');
 

/*  page affiche profile admin */ 
Route::get('/Profile', [App\Http\Controllers\AdminController::class, 'affichePageProfileAdmin'])->name('affichePageProfileAdmin')->middleware('role:admin');

/*  button modifier profil admin */ 
Route::post('/ModifierProfileAdmin', [App\Http\Controllers\AdminController::class, 'ModifierProfileAdmin'])->name('ModifierProfileAdmin')->middleware('role:admin');

/*  button changer mot de passe admin */ 

Route::post('/update-password', [App\Http\Controllers\AdminController::class, 'update_password'])->name('update_password')->middleware('role:admin');

/*  page affiche Categories admin */ 
Route::get('/AfficheCategories', [App\Http\Controllers\AdminController::class, 'showPageCategories'])->name('showPageCategories')->middleware('role:admin');

/*  button ajouter Categories admin */ 

Route::post('/addcategories', [App\Http\Controllers\AdminController::class, 'storeCategorie'])->name('storeCategorie')->middleware('role:admin');

/*  button modifier Categories admin */ 

Route::put('/categories/{category}', [App\Http\Controllers\AdminController::class, 'update'])->name('categories.update');

/*  button supprimer Categories admin */ 

Route::delete('/categories/{category}', [App\Http\Controllers\AdminController::class, 'destroy'])->name('categories.destroy');

/*  page affiche Produits admin */ 
Route::get('/AfficheProduit', [App\Http\Controllers\AdminController::class, 'showPageProduit'])->name('showPageProduit')->middleware('role:admin');

/*  button ajouter Produits admin */ 

Route::post('/storeProduit', [App\Http\Controllers\AdminController::class, 'storeProduit'])->name('storeProduit')->middleware('role:admin');
/*  button supprimer Produits admin */ 
Route::delete('/Produits/{produit}', [App\Http\Controllers\AdminController::class, 'destroyProduits'])->name('Produits.destroy')->middleware('role:admin');

/*  button recherche Produits admin */ 

Route::get('/admin_Produits_search', [App\Http\Controllers\AdminController::class, 'search'])->name('searchProduit');





Route::get('/jouersss', [App\Http\Controllers\AdminController::class, 'indexjouers'])->name('jouers.index');
Route::get('/jouers_create', [App\Http\Controllers\AdminController::class, 'createjouers'])->name('jouers.create');
Route::post('/jouersss', [App\Http\Controllers\AdminController::class, 'storejouers'])->name('jouers.store');
Route::get('/jouers_{jouer}_edit', [App\Http\Controllers\AdminController::class, 'editjouers'])->name('jouers.edit');
Route::put('/jouers_{jouer}', [App\Http\Controllers\AdminController::class, 'updatejouers'])->name('jouers.update');
Route::delete('/jouers_{jouer}', [App\Http\Controllers\AdminController::class, 'destroyjouers'])->name('jouers.destroy');




Route::get('/newsletters_create', [AdminController::class, 'create'])->name('newsletters.create');
Route::post('/newsletters/send', [AdminController::class, 'send'])->name('newsletters.send');

