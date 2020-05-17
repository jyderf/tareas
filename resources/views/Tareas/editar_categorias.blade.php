@extends('layouts.app')

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

<form action="{{ url('categorias/' . $categoria->id) }}" method="post">
    @csrf
    @method('PUT')
  <div class="form-group">
    <strong><label for="name">Categoría</label></strong>
    <input type="text" class="form-control" id="name" name="name" value="{{$categoria->name}}" required>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@endsection