<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produits;
use App\Models\Categories;

class ClientController extends Controller
{

    // function affiche home client 
    public function index()
    {
        $categories = Categories::with('products')->get();

        $products = Produits::all();
        return view('Client.Home.index', compact('products','categories')); 
       }

       public function show($category)
       {
           $category = Categories::where('Nom', $category)->firstOrFail();
           $products = $category->products;
   
           return view('Client.Categories.index', compact('category', 'products'));
       }
}
