<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{

    // function affiche home client 
    public function index()
    {
        return view('Client.Home.index');
    }
}
