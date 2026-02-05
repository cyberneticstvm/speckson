<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    function index()
    {
        $title = "Speckson | Premium Eye Wear";
        $description = "";
        $keywords = "";
        return view('index', compact('title', 'description', 'keywords'));
    }
}
