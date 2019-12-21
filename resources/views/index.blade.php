@extends("layouts/app")

@section("titulo")
Home
@endsection

@section("principal")

    <!-- Page Content -->
    <div class="container">

        <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

    
          
        @forelse ($posts as $post)
            <br>
                <div class="card mb-4">
                    <div class="card-body">
                    <h2 class="card-title">{{$post->title}}</h2>
                    <p class="card-text">{{$post->shortContent}}</p>
                    <a href="Post/{{$post->id}}" class="btn btn-primary">Leer Más &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">            
                    <p>Posteado el día {{$post->created_at->format("d")}} del {{$post->created_at->format("m")}} de {{$post->created_at->format("Y")}} por <a href="/SobreMi">{{$post->User->username}}</a> </p>
                    </div>
                </div>
                
        @empty
                
            @if (Auth::user())  
                <p>
                    No hay posts.
                </p>
                <br>
                <h4> <a href="/crear">¿Desea agregar uno?</a> </h4>
            @else     
                <p>
                    No hay posts.
                </p>
            @endif
            @endforelse
    <!-- Pagination -->
    {{$posts->links()}}
    </div>
    
    <!-- Sidebar Widgets Column -->
         <div class="col-md-4">
            <!-- Side Widget -->
            <div class="card my-4">
                <h5 class="card-header">Bruno Belucci</h5>
                <div class="card-body">
                Bienvenido a mi blog! Estaré posteando diversos contenidos sobre tecnologia!
                </div>
            </div>
            <div class="card my-4">
            <h5 class="card-header">Categories</h5>
              <div class="row card-body">
                <div class="col-lg-6 ">
                  <ul class="list-unstyled card-text mb-0">
                    <li>
                      <a href="/categoria/1">Computadoras</a>
                    </li>
                    <li>
                      <a href="/categoria/2">Celulares</a>
                    </li>
                    <li>
                      <a href="/categoria/3">Monitores</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div> 

    </div>
    <!-- /.row -->
    </div>
<!-- /.container -->

@endsection


