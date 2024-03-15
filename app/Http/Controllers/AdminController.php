<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        return view('Admin.Home.index');
    }

    public function affichePageProfileAdmin()
    {
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
}
