@extends('layouts.app')

@section('principal')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Te logeaste!

                    <h1><a href="/">Ir a la página de inicio.</a></h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
