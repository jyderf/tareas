@extends('layouts.app')
@section('title', 'Tareas')

@section('content')

@if ($errors->any())

  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>

@endif


<h3>Crear nueva tarea</h3>
<form action="{{ url('/tareas') }}" method="POST">
 @csrf
  <div class="form-group">
      <strong><label for="">Tarea</label></strong>
      <input type="text" class="form-control" name="name" placeholder="tarea" required>
  </div>

  <div class="form-group">
       <strong> <label for="date">Fecha</label></strong>
       <input type="date" name="date" class="form-control" required>
  </div>

  <!---------------------select item-------------------------------------------------------->
  <div class="form-group">
              <strong><label for="">Categoría</label></strong>     (Si no aparece ninguna opción debes ingresar a la sección categorías y crear una).
                 
                    <select class="form-control" id="categoria" name="categoria" required>
                                <option value=''></option>
                            @foreach($cat_in as $cat)
                               <option value='{{$cat->id}} ' >  {{$cat->name}}  </option>
                            @endforeach
                    </select>
  </div>
  <!--------------------- FIN select item-------------------------------------------------------->

  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection