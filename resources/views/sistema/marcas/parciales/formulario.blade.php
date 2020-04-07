<div class="form-group md-12">
    <strong>
{{Form::label('marca','Marca',['class'=>''])}}
    </strong>
{{Form::text('marca',null,
['class'=>'form-control','placeholder'=>'ingrese una Marca..'])}}
</div>


<center>
    {{Form::submit('Guardar',['class'=>'btn btn-info'])}}
<a href="http://localhost:8000/marcas/" class="btn btn-success">Regresar</a></center>
