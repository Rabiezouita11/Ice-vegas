<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Categories;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str; // Import the Str class
use Illuminate\Support\Facades\Storage;

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
        $categoryCount = Categories::count();
    View::share('categoryCount', $categoryCount);
        return view('Admin.Home.index');
    }

    public function affichePageProfileAdmin()
    {
        $categoryCount = Categories::count();
    View::share('categoryCount', $categoryCount);
        return view('Admin.Profile.index');
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
    View::share('categoryCount', $categoryCount);

    return view('Admin.Categories.index', compact('categories', 'categoryCount')); // Pass categories and category count to the view
}


public function storeCategorie(Request $request)
{
    // Validate the incoming request data
    $validatedData = $request->validate([
        'Nom' => 'required|string|max:255',
        'Image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Create a new category instance
    $category = new Categories();
    $category->Nom = $validatedData['Nom'];

    // Handle image upload if provided
    if ($request->hasFile('Image')) {
        $image = $request->file('Image');
        $imageName = Str::random(20) . '.' . $image->getClientOriginalExtension(); // Generate a unique image name
        $image->move(public_path('categories'), $imageName); // Move the uploaded image to the "categories" folder
        $category->Image = 'categories/' . $imageName; // Store the image path in the database
    }

    // Save the category to the database
    $category->save();

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
        return redirect()->back()->with('error', 'Category not found.');
    }
    $oldImage = $category->Image;
dd($oldImage);
    // Update the category name
    $category->Nom = $validatedData['Nom'];

    // Handle image upload if provided
    if ($request->hasFile('Image')) {
        if ($oldImage && Storage::disk('public')->exists($oldImage)) {
            Storage::disk('public')->delete($oldImage);
        }
        $image = $request->file('Image');
        $imageName = Str::random(20) . '.' . $image->getClientOriginalExtension(); // Generate a unique image name
        $image->move(public_path('categories'), $imageName); // Move the uploaded image to the "categories" folder
        $category->Image = 'categories/' . $imageName; // Store the image path in the database
    }

    // Save the updated category to the database
    $category->save();

    // Redirect back or to a specific route after updating
    return redirect()->route('showPageCategories')->with('success', 'Category updated successfully.');
}


public function destroy(Categories $category)
{
    $category->delete();

    // Optionally, you can add additional logic here

  
    return redirect()->route('showPageCategories')->with('success', 'Category deleted successfully.');

}


}
