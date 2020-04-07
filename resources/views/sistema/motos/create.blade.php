@extends('plantilla')
@section('contenido')

<div class="container">
    <center><h1>   Local De Motos</h1></center>
    <div class="row justify-content-center">
        @include('danger.error')

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <center><tr><td><h1>Ingresar La Informacion de la  Moto</h1></tr></td></center>
                </div>
                <div class="card-body">
                   {!! Form::open(['route'=>['motos.store']]) !!}
                   @include('sistema.motos.parciales.formulario')
                   {!! Form::close() !!}



                </div>
            </div>
        </div>
    </div>
</div>

 @endsection
