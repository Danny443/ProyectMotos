@extends('plantilla')
@section('contenido')

<div class="container">
    <center><h1>Categorias</h1></center>
    <div class="row justify-content-center">
        @include('danger.error')
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <center><tr><td><h1>Ingresar Categoria</h1></tr></td></center>
                </div>
                <div class="card-body">
                   {!! Form::open(['route'=>['categorias.store']]) !!}
                   @include('sistema.categorias.parciales.formulario')
                   {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>

 @endsection
