<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear(Request $req)
    {
        //
        

        $reglas = [
            "comment" => "string|min:1|max:600",
        ];

        $mensajes = [
            "string" => "El campo :attribute debe ser un texto",
            "min" => "El campo :attribute tiene un mínimo de :min",
            "max" => "El campo :attribute tiene un máximo de :max",
                      
        ];

        $this->validate($req, $reglas, $mensajes);

        $comentarioNuevo= New Comment(); 

        $comentarioNuevo->comment = $req["comment"];
        $comentarioNuevo->user_id = $req["user_id"];
        $comentarioNuevo->post_id = $req["post_id"];
        

        $comentarioNuevo->save();
        
        return redirect("/Post/{$req["post_id"]}");

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {
        //Capturo el comentario
        $comentarioAEditar = Comment::find($id);

        $comentarioAEditar->delete();

        
        return (redirect("/"));
    }
}
