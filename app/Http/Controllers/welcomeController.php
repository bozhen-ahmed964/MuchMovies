<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use App\Models\Series;
use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function welcome()
    {
        $data = Series::all();
        return view('welcome', compact('data'));
    }
}
