@extends("layouts/app")

@section("titulo")
Crear
@endsection

@section("principal")
        <thead>
        <h1> Agregar un post </h1>
    
    <div class="entryPost"> 
        <form action="/procesarEntrada" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div>
                <label for="title">Titulo:</label>
                <br>
                <input type="text" name="title" value="{{old("title")}}">
            </div>
            <div>
                <label for="content">Contenido:</label>
                <br>
                <textarea name="content" value="{{old("content")}}" rows="10" cols="50" placeholder="Contenido del post"></textarea>
            </div>
            <div>
                <label for="shortContent">Resumen:</label>
                <br>
                <textarea name="shortContent" value="{{old("shortContent")}}" rows="10" cols="50" placeholder="Resumen del post"></textarea>
            </div>
            <div>
                <input type="submit" name="" value="Agregar Post">
            </div>
            
    </div>

    
@endsection


