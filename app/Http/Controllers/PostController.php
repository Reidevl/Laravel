<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SavePostRequest;
use App\Models\Post;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }

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
        // al pasar un new Post lo generamos con los campos null,
        // esto lo hacemos para que tenga los mismos parametros que la funcion edit
        return view('posts.create',['post' => new Post]);
    }

    public function store(SavePostRequest $request){

        Post::create($request->validated());

        return to_route('posts.index')->with('status','Post created!');
    }

    public function edit(Post $post){
        return view('posts.edit',['post' => $post]);
    }

    public function update(SavePostRequest $request, Post $post){

        $post->update($request->validated());

        $post->save();

        return to_route('posts.show', $post)->with('status','Post updated!');
    }

    public function destroy(Post $post){

        $post->delete();

        return to_route('posts.index')->with('status','Post deleted! T_T');
    }
}
