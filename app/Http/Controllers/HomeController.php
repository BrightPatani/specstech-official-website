<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
public function index()
    {
        // Controllers should only handle request/response and logic.
        // Static page content (images/text) is defined in the blade view.
        return view('pages.index');
    }
}