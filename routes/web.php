<?php

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

Route::get('/home', [App\Http\Controllers\ClientController::class, 'index'])->name('home')->middleware('role:client');



/*  ADMIN */


 /*  page affiche admin */ 
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin')->middleware('role:admin');
 

/*  page affiche profile admin */ 
Route::get('/Profile', [App\Http\Controllers\AdminController::class, 'affichePageProfileAdmin'])->name('affichePageProfileAdmin')->middleware('role:admin');

/*  button modifier profil admin */ 
Route::post('/ModifierProfileAdmin', [App\Http\Controllers\AdminController::class, 'ModifierProfileAdmin'])->name('ModifierProfileAdmin')->middleware('role:admin');

/*  button changer mot de passe admin */ 

Route::post('/update-password', [App\Http\Controllers\AdminController::class, 'update_password'])->name('update_password')->middleware('role:admin');



