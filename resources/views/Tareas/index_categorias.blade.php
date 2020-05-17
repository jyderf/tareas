@extends('layouts.app')
@section('title', 'Categorias')

@section('content')


<div class="row">
  <div class="col">
      <h3 class="text-center">CATEGORÍAS</h3>
  </div>
</div>

<div class="row">


<div class="col">
  <h5>
    
  </h5>
</div>

<div class="col-2">
   <a class="btn btn-primary float-rigth" href="{{ url('categorias/create') }}">
  Crear categoría
  </a>
</div>
  
<table class="table">
    <thead>
      <tr>
        <th scope="col">
          Nombre de categoría
        </th>
        <th scope="col">
          Acciones
        </th>
      </tr>
    </thead>

    <tbody>
        @foreach ($cat_vista  as $cat) 
           <tr>
              <td>{{$cat->name}}</td>
             

            <!------------------BOTONES EDITAR Y BORRAR------------------------------->
              <td>                        
                    <form action="{{ route('categorias.destroy', [$cat->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                        <a class="btn btn-success" href="{{ route('categorias.edit', [$cat->id]) }}">
                            <i class="fa fa-pencil">
                            </i>
                        </a>

                        <button class="btn btn-danger" >
                        <i class="fa fa-trash">
                        </i>
                        </button>


                    </form>
               </td>
               <!-----------------FIN BOTONES EDITAR Y BORRAR-------------------------------->
         </tr>
         @endforeach
      </tbody>
  </table>



@endsection
 