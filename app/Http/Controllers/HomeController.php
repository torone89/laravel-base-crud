<?php

namespace App\Http\Controllers;

use App\Models\Comic;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}
