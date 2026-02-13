<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::whereNotNull('published_at')->latest('published_at')->paginate(6);
        return view('pages.blog', compact('blogs'));
    }
}