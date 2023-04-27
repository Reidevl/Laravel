<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        // $posts = DB::table('posts')->get();
        // Obtenemos los datos de traves del modelo Post
        $posts = Post::get();

        // Retornamos una vista
        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post){
        return view('posts.show',['post' => $post]);
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){

        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return to_route('posts.index');
    }
}
