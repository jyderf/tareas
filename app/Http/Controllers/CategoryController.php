<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
         {  $cat_vista=\DB::table('categories')->select('categories.id as id','categories.name as name')->get();
       
            return view('Tareas.index_categorias',compact('cat_vista'));
         }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() 
        { return view('Tareas.create_categorias');
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $cat = new category();
        $cat->name = $request->input('name');
        $cat->save();      
     
        return redirect('/categorias'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {  //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
        {  $categoria = category::find($id);
            return view('Tareas.editar_categorias', ['categoria' => $categoria]);
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
        {    $cat=category::where('id', $id)->first();

            if($request->input('name') != null)
                {  $cat->name = $request->input('name');
                }
                else{ $cat->confirmed = 1;
                    }

            $cat->save();

            return redirect('/categorias');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
        {  //toma dos tablas relacionales, para de esta extraer sólo la fila 
           // que contenga el valor de $id enviado.
           $existente=\DB::table('tareas')
           ->join('categories','categories.id','=','tareas.category_id')
           ->select('tareas.category_id')
           ->where('tareas.category_id','=',$id)
           ->get();

           if($existente!="[]")
                {   echo"<div class='col-2 container'>
                        <a  float-rigth' > <br><br><br><br><br>No puedes eliminar esta CATEGORÍA, para lograrlo debes eliminar la TAREA a la que pertenece.</a>
                        </div>";
                     echo"<div class='col-2 container'><link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' />
                         <a href='/categorias' class='btn btn-success'>Volver</a>
                          <div> ";
                 }
                 else{  if($existente=="[]")
                                {  category::destroy($id);
                                   return redirect('/categorias');
                                }      
                     }    
        }
}
