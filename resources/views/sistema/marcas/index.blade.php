@extends('plantilla')
@section('contenido')

<div class="container">
    <center><h1>Marcas</h1></center>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <center><tr><td><h1>Marcas Ingresadas</h1></tr></td></center>
              <center>  <a href="{{route('marcas.create')}}" class="btn btn-primary pull-rigth">Nuevo</a>
                <a href="http://localhost:8000/" class="btn btn-success">Regresar</a></center>
                <h3>
                </div>
                <div class="card-body">
                  <center>  <table>
                         <thead>
                        <tr>
                         <th>Id</th>
                        <th>Marca</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                        </tr>
                        </thead>
                    <tbody>
                <!-- Esto es un comentario -->
                @foreach ($marcas as $item)
                <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->marca}}</td>
                        <td>
                        <a href="{{route('marcas.edit', $item->id)}}" class="btn btn-success">Editar</a>

                </td>
                <td>
                    <form method="post" action="{{url('/marcas/'.$item->id)}}">

                        <button type="submit" onclick="return confirm('Deseas borrar');"class="  btn btn-danger">Borrar</button>
                        {{csrf_field()}}
                        {{method_field('DELETE')}}

                    </form>

                </td>
                </tr>
@endforeach
                    </tbody>
                     </table></center>
                </div>
            </div>
        </div>
    </div>
</div>

 @endsection
