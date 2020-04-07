@if (count($errors))
<div class="alert alert-danger">

    <button type="button" class="close" data-dismiss="alert">
    &times;
    </button>
<ul>
    @foreach ($errors->all() as $error)
    <li>{{$errors }}</li>

    @endforeach
</ul>
</div>

@endif
@if (session('mensaje'))
<div class="alert alert-success">
    <p>{{seccion('mensaje')}}</p>
</div>
@endif

