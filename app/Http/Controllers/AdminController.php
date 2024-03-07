<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{


    // function affiche home admin
   public function index ()
   {
    return view('Admin.Home.index');
   }
}
