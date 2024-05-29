<?php

namespace App\Http\Controllers;

use App\Mail\NewsletterMail;
use App\Models\Categories;
use App\Models\Produits;
use App\Models\Jouer;
use App\Models\Newsletters;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;  // Import the Str class
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    // function affiche home admin


    public function index()
    {
        $clientCount = User::where('role', 'client')->count();
        $jouerscount = Jouer::count();
        $categoryCount = Categories::count();
        $ProduitsCount = Produits::count();
        View::share('categoryCount', $categoryCount);
        return view('Admin.Home.index', compact('ProduitsCount', 'clientCount', 'jouerscount'));
    }

    public function storeProduit(Request $request)
    {
        $request->validate([
            'Nom' => 'required',
            'Description' => 'required',
            'Image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'Prix' => 'required|numeric',
            'categorie_id' => 'required|exists:categories,id',
        ]);

        $imageName = time() . '.' . $request->Image->extension();
        $request->Image->move(public_path('images'), $imageName);

        Produits::create([
            'Nom' => $request->Nom,
            'Description' => $request->Description,
            'Image' => 'images/' . $imageName,
            'Prix' => $request->Prix,
            'categorie_id' => $request->categorie_id,
        ]);

        return redirect()->back()->with('success', 'Product added successfully.');
    }

    public function affichePageProfileAdmin()
    {
        $categoryCount = Categories::count();
        $ProduitsCount = Produits::count();
        View::share('ProduitsCount', $ProduitsCount);
        View::share('categoryCount', $categoryCount);
        return view('Admin.Profile.index');
    }
    public function search(Request $request)
    {
        $jouerscount = Jouer::count();
        $categoryCount = Categories::count();
        $ProduitsCount = Produits::count();
        View::share('ProduitsCount', $ProduitsCount);
        View::share('jouerscount', $jouerscount);
        View::share('categoryCount', $categoryCount);
        $query = $request->input('query');
        $Produits = Produits::where('Nom', 'like', "%$query%")
            ->orWhere('Description', 'like', "%$query%")
            ->orWhereHas('categorie', function ($q) use ($query) {
                $q->where('Nom', 'like', "%$query%");
            })
            ->paginate(10);

        $categorie = Categories::all();
        return view('Admin.Produits.index', compact('Produits', 'categorie'));
    }

    public function ModifierProfileAdmin(Request $request)
    {
        $id = $request['id'];
        $users = \App\Models\User::find($id);
        $users->name = $request['name'];
        $users->email = $request['email'];
        $users->role = $request['role'];

        // if ($request->hasFile('image')) {
        //     $users->image = $request->image->store('profile');
        // }
        $users->update();

        return redirect()->route('affichePageProfileAdmin')->with('success', 'le compte a bien été modifier');
    }

    public function update_password(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password'
        ]);

        $current_user = auth()->user();

        if (Hash::check($request->old_password, $current_user->password)) {
            $current_user->update([
                'password' => bcrypt($request->new_password)
            ]);

            return redirect()->back()->with('success', 'Mot de passe bien modifié.');
        } else {
            return redirect()->back()->with('errorpassword', 'Ancien mot de passe incorrect.');
        }
    }

    public function showPageCategories()
    {
        $categories = Categories::paginate(4);  // Fetch all categories
        $categoryCount = Categories::count();
        $ProduitsCount = Produits::count();
        $jouerscount = Jouer::count();
        View::share('categoryCount', $categoryCount);

        return view('Admin.Categories.index', compact('categories', 'categoryCount', 'ProduitsCount', 'jouerscount'));  // Pass categories and category count to the view
    }

    public function showPageProduit()
    {
        $Produits = Produits::paginate(4);  // Fetch all categories
        $jouerscount = Jouer::count();
        $categoryCount = Categories::count();
        $ProduitsCount = Produits::count();
        $categorie = Categories::all();  // Retrieve all categories from the database

        View::share('categoryCount', $categoryCount);

        return view('Admin.Produits.index', compact('categoryCount', 'ProduitsCount', 'Produits', 'categorie', 'jouerscount'));  // Pass categories and category count to the view
    }

    public function storeCategorie(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'Nom' => 'required|string|max:255',
            'Image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Create a new category instance
        $category = new Categories();
        $category->Nom = $validatedData['Nom'];

        // Handle image upload if provided
        if ($request->hasFile('Image')) {
            $image = $request->file('Image');
            $imageName = Str::random(20) . '.' . $image->getClientOriginalExtension();  // Generate a unique image name
            $image->move(public_path('categories'), $imageName);  // Move the uploaded image to the "categories" folder
            $category->Image = 'categories/' . $imageName;  // Store the image path in the database
        }

        // Save the category to the database
        $category->save();
        Session::flash('toast', ['type' => 'success', 'message' => 'Category added successfully.']);

        // Redirect back or to a specific route after saving
        return redirect()->route('showPageCategories')->with('success', 'Category added successfully.');
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'Nom' => 'required|string|max:255',
            'Image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Find the category by ID
        $category = Categories::find($id);
        if (!$category) {
            // Handle if the category is not found
            return response()->json(['error' => 'Category not found.'], 404);
        }
        $oldImage = $category->Image;
        // Update the category name
        $category->Nom = $validatedData['Nom'];

        // Handle image upload if provided
        if ($request->hasFile('Image')) {
            if ($oldImage && Storage::disk('public')->exists($oldImage)) {
                Storage::disk('public')->delete($oldImage);
            }
            $image = $request->file('Image');
            $imageName = Str::random(20) . '.' . $image->getClientOriginalExtension();  // Generate a unique image name
            $image->move(public_path('categories'), $imageName);  // Move the uploaded image to the "categories" folder
            $category->Image = 'categories/' . $imageName;  // Store the image path in the database
        }

        // Save the updated category to the database
        $category->save();

        // Return success message
        return response()->json(['message' => 'Category updated successfully.']);
    }

    public function destroy(Categories $category)
    {
        try {
            $category->delete();
            // Optionally, you can add additional logic here
            $message = 'Category deleted successfully.';
            // Return JSON response with the message
            return response()->json(['message' => $message]);
        } catch (\Exception $e) {
            // Handle the exception
            $errorMessage = 'An error occurred while deleting the category.';
            // Return JSON response with the error message and status code 500 (Internal Server Error)
            return response()->json(['error' => $errorMessage], 500);
        }
    }

    public function destroyProduits(Produits $produit)
    {
        try {
            $produit->delete();
            // Optionally, you can add additional logic here
            $message = 'Produit deleted successfully.';
            // Return JSON response with the message
            return response()->json(['message' => $message]);
        } catch (\Exception $e) {
            // Handle the exception and get the error message
            $errorMessage = $e->getMessage();
            // Return JSON response with the error message and status code 500 (Internal Server Error)
            return response()->json(['error' => $errorMessage], 500);
        }
    }


    public function indexjouers()
    {
        $Produits = Produits::paginate(4);  // Fetch all categories

        $categoryCount = Categories::count();
        $ProduitsCount = Produits::count();
        $jouerscount = Jouer::count();
        $jouers = Jouer::all();
        return view('Admin.jouers.index', compact('jouers', 'categoryCount', 'ProduitsCount', 'jouerscount'));
    }


    public function createjouers()
    {
        $categoryCount = Categories::count();
        $ProduitsCount = Produits::count();
        $jouerscount = Jouer::count();
        return view('Admin.jouers.create', compact('categoryCount', 'ProduitsCount', 'jouerscount'));
    }

    public function storejouers(Request $request)
    {
        // Validate the request
        $validatedData = $request->validate([
            'Image' => 'required|image|mimes:jpeg,png,jpg,gif', // Ensure it's an image file
            'Reponse1' => 'required',
            'Reponse2' => 'required',
            'name' => 'required',
            'Reponse3' => 'required',
            'ReponseCorrect' => 'required',
            'points_gained' => 'required|integer'
        ]);

        // Store the uploaded file in the 'jouers' folder
        // $imagePath = $request->file('Image')->store('jouers', 'public');

        // Create a new Jouer instance
        $jouer = new Jouer();
        if ($request->hasFile('Image')) {
            $image = $request->file('Image');
            $imageName = Str::random(20) . '.' . $image->getClientOriginalExtension();  // Generate a unique image name
            $image->move(public_path('jouers'), $imageName);  // Move the uploaded image to the "categories" folder
            $jouer->Image = 'jouers/' . $imageName;  // Store the image path in the database
        }
        $jouer->Reponse1 = $validatedData['Reponse1'];
        $jouer->name = $validatedData['name'];
        $jouer->Reponse2 = $validatedData['Reponse2'];
        $jouer->Reponse3 = $validatedData['Reponse3'];
        $jouer->ReponseCorrect = $validatedData['ReponseCorrect'];
        $jouer->points_gained = $validatedData['points_gained'];

        // Save the jouer to the database
        $jouer->save();

        return redirect()->route('jouers.index')->with('success', 'Jouer created successfully.');
    }
    public function editjouers(Jouer $jouer)
    {
        $categoryCount = Categories::count();
        $ProduitsCount = Produits::count();
        $jouerscount = Jouer::count();
        return view('Admin.jouers.edit', compact('jouer', 'categoryCount', 'ProduitsCount', 'jouerscount'));
    }

    public function updatejouers(Request $request, Jouer $jouer)
    {
        // Validate the request
        $validatedData = $request->validate([
            'Reponse1' => 'required',
            'Reponse2' => 'required',
            'Reponse3' => 'required',
            'ReponseCorrect' => 'required',
            'points_gained' => 'required|integer'
        ]);

        // Check if an image has been uploaded
        if ($request->hasFile('Image')) {
            $image = $request->file('Image');
            $imageName = Str::random(20) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('jouers'), $imageName);
            // Delete the old image if it exists
            if (File::exists(public_path($jouer->Image))) {
                File::delete(public_path($jouer->Image));
            }
            // Update the image path in the database
            $jouer->Image = 'jouers/' . $imageName;
        }

        // Update other fields
        $jouer->update($validatedData);

        return redirect()->route('jouers.index')->with('success', 'Jouer updated successfully.');
    }

    public function destroyjouers(Jouer $jouer)
    {
        $jouer->delete();

        return redirect()->route('jouers.index')->with('success', 'Jouer deleted successfully.');
    }


    public function create()
    {
        $categoryCount = Categories::count();
        $ProduitsCount = Produits::count();
        $jouerscount = Jouer::count();
        $products = Produits::all();
        return view('Admin.Newsletter.index', compact('products','categoryCount','ProduitsCount','jouerscount'));
    }
    public function send(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
            'content' => 'required|string',
            'products' => 'required|array',
        ]);

        $products = Produits::whereIn('id', $request->products)->get();
        $subscribers = Newsletters::all();

        foreach ($subscribers as $subscriber) {
            Mail::to($subscriber->email)->send(new NewsletterMail($request->subject, $request->content, $products));
        }

        return redirect()->route('newsletters.create')->with('success', 'Newsletter sent successfully.');
    }
}
