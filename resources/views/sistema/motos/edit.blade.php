@extends('plantilla')
@section('contenido')

<div class="container">
    <center><h1>   Local De  Motos</h1></center>
    @include('danger.error')

    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">

               <center><tr><td><h1>Editar La Informacion De La Moto</h1></tr></td></center>
                </div>
                <div class="card-body">

                   {!! Form::model($moto, ['route'=>['motos.update',$moto->id],'method'=>'PUT'])!!}
                   @include('sistema.motos.parciales.formulario')
                   {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>

 @endsection
