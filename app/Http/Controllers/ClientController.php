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
    
        // Ensure that each product is loaded with its category
        $products = Produits::with('categorie')->get();
    

        $categoriesALL = Categories::all();
        return view('Client.Home.index', compact('products', 'categories', 'categoriesALL'));
    }
       public function show($category)
       {
           $category = Categories::where('Nom', $category)->firstOrFail();
           $products = $category->products;
           $categories = Categories::with('products')->get();

           return view('Client.Categories.index', compact('category', 'products','categories'));
       }

       public function showproducts($id)
       {
           // Find the product by ID and load its category
           $product = Produits::with('categorie')->findOrFail($id);
   
           // Return the product details view with the product data
           return view('Client.Produit.show', compact('product'));
       }
}
