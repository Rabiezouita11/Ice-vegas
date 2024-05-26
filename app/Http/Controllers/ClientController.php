<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produits;
use App\Models\Categories;
use App\Models\Jouer;
class ClientController extends Controller
{



    //function affiche page Contact
    public function Contact()
    {
        return view('Client.Contact.index');
    }

    //function affiche page Apropos
    public function Apropos()
    {
        return view('Client.Apropôs.index');
    }


    // function affiche home client 
    public function index()
    {
        $categories = Categories::with('products')->get();
        $players = Jouer::all(); // Retrieve all players from the database

        // Ensure that each product is loaded with its category
        $products = Produits::with('categorie')->get();


        $categoriesALL = Categories::all();
        return view('Client.Home.index', compact('products', 'categories', 'categoriesALL','players'));
    }
    public function show($category)
    {



        $category = Categories::where('Nom', $category)->firstOrFail();
        $products = $category->products;
        $categories = Categories::with('products')->get();
        $categoriesALL = Categories::all();

        foreach ($categoriesALL as $category) {
            $category->products_count = Produits::where('categorie_id', $category->id)->count();
        }
        return view('Client.Categories.index', compact('categoriesALL', 'category', 'products', 'categories'));
    }

    public function showproducts($id)
    {
        // Find the product by ID and load its category
        $product = Produits::with('categorie')->findOrFail($id);

        // Return the product details view with the product data
        return view('Client.Produit.show', compact('product'));
    }
}
