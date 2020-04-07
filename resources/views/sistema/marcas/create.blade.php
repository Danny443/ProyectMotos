@extends('plantilla')
@section('contenido')

<div class="container">
    <center><h1>Marca</h1></center>
    <div class="row justify-content-center">
        @include('danger.error')
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <center><tr><td><h1>Ingresar Marca</h1></tr></td></center>
                </div>
                <div class="card-body">
                   {!! Form::open(['route'=>['marcas.store']]) !!}
                   @include('sistema.marcas.parciales.formulario')
                   {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>

 @endsection
