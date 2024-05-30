<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public  function index()
    {
        $blogs = Post::get();
        return view('blog', compact('blogs'));
    }
}
