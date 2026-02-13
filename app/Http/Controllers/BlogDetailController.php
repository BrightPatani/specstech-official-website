<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogDetailController extends Controller
{
    public function show(Blog $blog)
    {
        return view('pages.blog-detail', compact('blog'));
    }
}
