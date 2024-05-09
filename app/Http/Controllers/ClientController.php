<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produits;

class ClientController extends Controller
{

    // function affiche home client 
    public function index()
    {
        $products = Produits::all();
        return view('Client.Home.index', compact('products'));    }
}
