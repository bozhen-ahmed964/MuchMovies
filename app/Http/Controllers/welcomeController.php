<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function welcome()
    {
        $data = Movies::all();
        return view('welcome', compact('data'));
    }
}
