<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostControllerFront extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('Front.pages.posts', compact('posts'));
    }

}
