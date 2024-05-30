<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Suivi_point_de_fidelite;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail; // Import the Mail facade

class RegisterController extends Controller
{
    /*
    |---------

    -----------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    public function redirectTo() {
        $role = Auth::user()->role; 
        switch ($role) {
          case 'admin':
            return '/admin';
            break;
          case 'client':
            return '/home';
            break; 
      
        
        }
      }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'telephone' => ['required', 'integer', 'digits:8'],
            // 'role' => ['required', 'string', 'max:255'],

        ]); 
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
   
     protected function create(array $data)
     {
         $user = User::create([
             'name' => $data['name'],
             'email' => $data['email'],
             'telephone' => $data['telephone'],
             'password' => Hash::make($data['password']),
             'role' => 'client', 
         ]);
         $totalPoints = 50;

         // Create a record in the Suivi_point_de_fidelite table
         Suivi_point_de_fidelite::create([
            'Totale_point' => $totalPoints,
             
             'users_id' => $user->id,
         ]);
         Mail::to($user->email)->send(new WelcomeMail($user, $totalPoints));

         return $user;
     }
    
}
