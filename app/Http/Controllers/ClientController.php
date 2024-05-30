<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produits;
use App\Models\Categories;
use App\Models\Jouer;
use App\Models\Newsletters;
use App\Models\Reponse_Quiz;
use App\Models\Suivi_point_de_fidelite;

class ClientController extends Controller
{



    public function comming_soon()
    {
        return view('comming-soon.index');
    }


    public function checkResponse(Request $request)
    {
        // Validate the request data
        $request->validate([
            'jouerId' => 'required|exists:jouers,id',

        ]);
        $user = auth()->user();

        // Get the user ID
        $userId = $user->id;

        // Check if the user has already played this quiz
        $existingResponse = Reponse_Quiz::where('jouers_id', $request->jouerId)
            ->where('users_id', $userId)
            ->exists();

        if ($existingResponse) {
            return response()->json(['error' => 'You have already played this quiz.']);
        }

        // Continue with the quiz verification process
        // ...
    }

    public function saveResponse(Request $request)
    {
        $user = auth()->user();
        // Validate the request data
        $validatedData = $request->validate([
            'jouerId' => 'required|exists:jouers,id',
            'response' => 'required',
        ]);

        // Get the Jouer object
        $jouer = Jouer::findOrFail($validatedData['jouerId']);

        // Check if the response matches the correct response
        if ($validatedData['response'] == $jouer->ReponseCorrect) {
            // Add points gained from Jouer to user's "sold" field



            // Save the response into the Reponse_Quiz table
            Reponse_Quiz::create([
                'Reponse' => $validatedData['response'],
                'users_id' => $user->id,
                'jouers_id' => $jouer->id,
            ]);

            // Update the Totale_point field in the Suivi_point_de_fidelite table
            $suiviPoint = Suivi_point_de_fidelite::where('users_id', $user->id)->first();
            if ($suiviPoint) {
                $suiviPoint->Totale_point += $jouer->points_gained;
                $suiviPoint->save();
            } else {
                Suivi_point_de_fidelite::create([
                    'Totale_point' => $jouer->points_gained,
                    'users_id' => $user->id,
                ]);
            }

            return response()->json([
                'message' => 'Response is correct. ' . $jouer->points_gained . ' points added to sold.'
            ]);
        } else {
            Reponse_Quiz::create([
                'Reponse' => $validatedData['response'],
                'users_id' => $user->id,
                'jouers_id' => $jouer->id,
            ]);
            return response()->json(['message' => 'Response is incorrect.']);
        }
    }

    public function showJouer($id)
    {
        // Find the jouer by its ID
        $jouer = Jouer::findOrFail($id);

        // Return the jouer details as JSON response
        return response()->json($jouer);
    }
    public function jeux()
    {
        $categoriesALL = Categories::all();
        $players = Jouer::all(); // Retrieve all players from the database
        return view('Client.Jeux.index', compact('categoriesALL', 'players'));

    }

    //function affiche page Contact
    public function Contact()
    {
        $categoriesALL = Categories::all();

        return view('Client.Contact.index', compact('categoriesALL'));
    }

    //function affiche page Apropos
    public function Apropos()
    {
        $categoriesALL = Categories::all();
        return view('Client.Apropôs.index', compact('categoriesALL'));
    }


    // function affiche home client 
    public function index()
    {
        $categories = Categories::with('products')->get();
        $players = Jouer::all(); // Retrieve all players from the database

        // Ensure that each product is loaded with its category
        $products = Produits::with('categorie')->get();


        $categoriesALL = Categories::all();
        return view('Client.Home.index', compact('products', 'categories', 'categoriesALL', 'players'));
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
        $categoriesALL = Categories::all();

        // Return the product details view with the product data
        return view('Client.Produit.show', compact('product', 'categoriesALL'));
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletters,email',
        ]);

        $newsletter = new Newsletters();
        $newsletter->email = $request->email;
        $newsletter->save();

        return redirect()->back()->with('success', 'Thank you for subscribing to our newsletter!');
    }




}
