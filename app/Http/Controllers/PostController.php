<?php
namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SavePostRequest;


class PostController extends Controller {

    public function index(){
        $posts = Post::get();

        return view('posts.index',['posts' => $posts]);    
    }
    public function show(Post $post)
    {
        return view('posts.show',['post' => $post]);
    }
    public function create()
    {
        return view('posts.create',['post' => new Post]);
    }
    public function store(SavePostRequest $request)
    {
        //laravel valida el dato a lo que llega a la funcion
        //si pasa se ejecuta el codigo sino chau
        /* $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save(); 
        esto de aqui se reemplazo con el codigo de abajo
        */
        
        Post::create ($request -> validated());
        session()->flash('status','Post created!');
        return to_route('posts.index');
    }
    public function edit(Post $post){
        return view('posts.edit',['post' => $post]);
    }


    public function update(SavePostRequest $request,Post $post)    {

               
       /*  $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save(); */

        $post->update($request -> validated());

        session()->flash('status','Post updated!');

        return to_route('posts.show', $post);
    }
    
}