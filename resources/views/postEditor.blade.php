@php
use App\Http\Controllers\Helper;
@endphp
@extends("layouts/app")

@section("titulo")
Post
@endsection

@section("principal")
<!-- Page Content -->
<div class="container">

  <div class="row">  
      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h3 class="mt-4"><input type="text" name="tittle" value="{{$post->title}}" id=""> </h3>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#"><input type="hidden" name="user_id" id="" value="{{$post->user_id}}">{{$post->User->username}}</a>
        </p>

        <hr>

        
        <!-- Date/Time -->
        <p>Posteado el día {{$post->created_at->format("d")}} del {{$post->created_at->format("m")}} de {{$post->created_at->format("Y")}}</p>
        
        <hr>
        <h2><label for="shortContent">Resumen</label></h2>
        <p class="lead"><textarea name="shortContent" id="" cols="50" rows="20" value="{{$post->shorContent}}">{{$post->shortContent}}</textarea></p>

        <!-- Post Content -->
        <h2><label for="content">Contenido</label></h2>
        <p class="lead"><textarea name="content" id="" cols="50" rows="40" value="{{$post->content}}">{{$post->content}}</textarea></p>

        <hr>

        <!-- Single Comment -->
        @forelse ($comments as $comment)
        <form action="/eliminarComentario/{{$comment->id}}" method="post">
          @csrf
          <button type="submit">Eliminar Comentario</button>
        </form>
        <div class="card my-4">
          <h5 class="card-header">{{$comment->User->username}}  : </h5>
          <div class="card-body">
                <h5 class="card-text" rows="3">{{$comment->comment}}</h5>
          </div>
        </div>
            
        @empty
        <h2> No hay comentarios para mostrar.</h2>   
        @endforelse
        
        <hr>

        </div>
        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">
          <!-- Side Widget -->
          <div class="card my-4">
              <h5 class="card-header">{{$post->User->name}}  {{$post->User->last_name}}</h5>
              <div class="card-body">
              Bienvenido a mi blog! Estaré posteando diversos contenidos sobre tecnologia!
              </div>
          </div>

      </div>

  </div>
<!-- /.row -->
</div>
<!-- /.container -->



@endsection