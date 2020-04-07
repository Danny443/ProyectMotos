@extends('plantilla')
@section('contenido')

<div class="container">
   <center><h1>   Local De  Motos</h1></center>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <center><tr><td><h1>Infomacion de la Motos Ingresadas</h1></tr></td></center>
                     <center><a href="{{route('motos.create')}}" class="btn btn-primary pull-rigth">Nuevo</a>
                    <a href="http://localhost:8000/" class="btn btn-success">Regresar</a></center>


                </div>
                <div class="card-body">
                  <center>  <table>
                         <thead>
                        <tr>
                          <th>Id</th>
                            <th>Marca</th>
                            <th>Categoria</th>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Estado</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                            </tr>
                            </thead>

                    <tbody>
                <!-- Esto es un comentario -->
                @foreach ($motos as $moto)
                <tr>
                        <td>{{$moto->id}}</td>
                        <td>{{$moto->marca->marca}}</td>

                        <td>{{$moto->categoria->categoria}}</td>
                        <td>{{$moto->codigo}}</td>
                        <td>{{$moto->nombre}}</td>
                        <td>{{$moto->descripcion}}</td>
                        <td>{{$moto->estado}}</td>
                        <td>
                        <a href="{{route('motos.edit', $moto->id)}}" class="btn btn-success">Editar</a>

                </td>
                <td>
                <form method="post" action="{{url('/motos/'.$moto->id)}}">

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
