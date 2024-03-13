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

/*  page affiche client */

Route::get('/home', [App\Http\Controllers\ClientController::class, 'index'])->name('home')->middleware('role:client');


 /*  page affiche admin */ 
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin')->middleware('role:admin');
