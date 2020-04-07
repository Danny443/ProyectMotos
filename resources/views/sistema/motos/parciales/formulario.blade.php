<div class="form-group md-12">

    <strong>

        {{Form::label('marca_id','Marcas',['class'=>''])}}
    </strong>
    <select name="marcas_id" id="inputmarcas_id" class="form-control">
                            <option value=""">Escoja el Marcas </option>
                                @foreach ($marcas as $marca)
                                <option value="{{ $marca['id']}}"> {{$marca['marca']}}</option>
                                @endforeach
                        </select>
<strong>

{{Form::label('categoria_id','Categorias',['class'=>''])}}
    </strong>
    <select name="categoria_id" id="inputcategoria_id" class="form-control">
                                <option value=""
                                > Escoja el categoria </option>
                                @foreach ($categorias as $categoria)
                                <option value="{{ $categoria['id']}}"> {{$categoria ['categoria']}}</option>
                                @endforeach
                        </select>




{{Form::label('codigo','Codigo',['class'=>''])}}
    </strong>
{{Form::text('codigo',null,
['class'=>'form-control','placeholder'=>'ingrese un Codigo..'])}}


<strong>
    {{Form::label('nombre','Nombre',['class'=>''])}}
        </strong>
    {{Form::text('nombre',null,
    ['class'=>'form-control','placeholder'=>'ingrese un Nombre..'])}}


<strong>
    {{Form::label('descripcion','Descripcion',['class'=>''])}}
        </strong>
    {{Form::text('descripcion',null,
    ['class'=>'form-control','placeholder'=>'ingrese un Descripcion..'])}}






        </strong>



 <strong>
    {{Form::label('estado','Estado',['class'=>''])}}
    <select name="estado" id="lista1" class="form-control">
        <option value="" > Escoja el Estados </option>
           <option value="Activo">Activo</option>
            <option value="Borrado">Borrado</option>
            <option value="Borrado">Supendido</option>
   </select></center>




</div>

<center>
    {{Form::submit('Guardar',['class'=>'btn btn-info'])}}
<a href="http://localhost:8000/motos/" class="btn btn-success">Regresar</a></center>



