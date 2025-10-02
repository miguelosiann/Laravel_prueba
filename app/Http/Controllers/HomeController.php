<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Primer metodo pruea

    public function index()
    {
        return view('home');
    }
}
