<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
public function index()
    {
        $blogs = Blog::where('published_at', '!=', null)
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();
        
        return view('pages.index', compact('blogs'));
    }
}