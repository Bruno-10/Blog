<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use Carbon\Traits\Timestamp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $req){
            $posts = Post::paginate(3);
            return view("index", compact("posts"));
       
        
    }
    public function post($id){
        $postMultiDimensional = Post::where("id", "=", $id)->get();
        $posts = Arr::flatten((array) $postMultiDimensional);
        $commentsMultiDimensional = Comment::where("post_id", "=", $id)->get();
        $comments = Arr::flatten((array) $commentsMultiDimensional);

        return view("post", compact("posts", "comments"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function agregar(Request $req){

        $reglas = [
            "title" => "string|min:0|max:30", 
            "content" => "string|min:0|max:400000",
            "shortContent" => "string|min:0|max:20000"
        ];

        $mensajes = [
            "string" => "El campo :attribute debe ser un texto",
            "min" => "El campo :attribute tiene un mínimo de :min",
            "max" => "El campo :attribute tiene un máximo de :max",
                      
        ];

        $this->validate($req, $reglas, $mensajes);

        $postNuevo = new Post();    

       

        $postNuevo->title = $req["title"];
        $postNuevo->content = $req["content"];
        $postNuevo->shortContent = $req["shortContent"];
        $postNuevo->user_id = Auth::user()->id;
        $postNuevo->save();

        return redirect("/");
    }

      /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function categoria($id)
    {
        //Filtra Por Categoria
        $posts = Post::where('categoria_id', '=', $id)->paginate(3);
        return view("index", compact("posts"));
        
    }

    public function SobreMi(){
        return(view('SobreMi'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */

    public function mostrarEditor($id){
        $post = Post::find($id);
        $commentsMultiDimensional = Comment::where("post_id", "=", $id)->get();
        $comments = Arr::flatten((array) $commentsMultiDimensional);
        return view("postEditor", compact("post", "comments"));
    }

    public function editar(request $req)
    {
        $reglas = [
            "title" => "string|min:0|max:30", 
            "content" => "string|min:0|max:400000",
            "shortContent" => "string|min:0|max:20000"
        ];

        $mensajes = [
            "string" => "El campo :attribute debe ser un texto",
            "min" => "El campo :attribute tiene un mínimo de :min",
            "max" => "El campo :attribute tiene un máximo de :max",
                      
        ];

        $this->validate($req, $reglas, $mensajes);

        $postAEditar = Post::find($req["id"]);    

        $postAEditar->title = $req["title"];
        $postAEditar->content = $req["content"];
        $postAEditar->shortContent = $req["shortContent"];
        $postAEditar->user_id = Auth::user()->id;
        $postAEditar->save();

        return redirect("/");
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
