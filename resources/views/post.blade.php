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
    @foreach($posts as $post)
    @section("editar")
    @if(Auth::check())
    @if(!Helper::noEsAdmin())
      <li class="nav-item">
      <a class="nav-link color_menu" href="/editar/{{$post->id}}">Editar Post</a>
      </li>
    
    @endif
    @endif
    @endsection
      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Title -->
        <h1 class="mt-4">{{$post->title}}</h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#">{{$post->User->username}}</a>
        </p>

        <hr>

        
        <!-- Date/Time -->
        <p>Posteado el día {{$post->created_at->format("d")}} del {{$post->created_at->format("m")}} de {{$post->created_at->format("Y")}}</p>

        <hr>

        <!-- Post Content -->
        <p class="lead">{{$post->content}}</p>

        <hr>
        <!-- Comments Form -->
        @if(Auth::check())
        <div class="card my-4">
          <h5 class="card-header">Hola, {{$post->User->username}} deja tu comentario!</h5>
          <div class="card-body">
            <form action="/procesarComentario" method="post">
              @csrf
            <input type="hidden" name="post_id" value="{{$post["id"]}}">
            <input type="hidden" name="user_id" value="{{$post["user_id"]}}">
              <div class="form-group">
                <textarea class="form-control" name="comment" placeholder="Tu comentario..." rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
          </div>
        </div>
        <hr>
        @endif
        <!-- Single Comment -->
        @forelse ($comments as $comment)
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
@endforeach


@endsection