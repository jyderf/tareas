@extends('layouts.app')
@section('title', 'Categorias')

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


<h1>Crear nueva categoría</h1>
<form action="{{ url('/categorias') }}" method="POST">
 @csrf
  <div class="form-group">
    <strong><label for="">Categoría</label></strong>
    <input type="text" class="form-control" name="name" placeholder="categoria" required>
  </div>

 
  
  <button type="submit" class="btn btn-primary">Agregar categoría</button>
</form>

@endsection