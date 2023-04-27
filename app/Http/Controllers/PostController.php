<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        // $posts = DB::table('posts')->get();
        $posts = Post::get();

        return view('blog', ['posts' => $posts]);
    }
}
