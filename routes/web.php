<?php

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|Route::get -> Consultar
|Route::post-> Guardar
|Route::put -> Actualizar
|Route::delete -> Eliminar
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gato', function () {
    //consulta a la base de datos

    //array multidimensiona $array= [[],[]];
    $posts = [
        ['id'=>1 ,'name'=>'Cassie','edad'=>2],
        ['id'=>2 ,'name'=>'Afrodita','edad'=>1],
        ['id'=>3 ,'name'=>'Albafica','edad'=>1],
        ['id'=>4 ,'name'=>'Mimi','edad'=>1]
    ];

    //No se aplica compact debio a que es un array -> compact($posts)
    return view('gato', ["posts"=>$posts]);
});

Route::get('/gato/{gatos}', function ($gatos) {
        $post =$gatos;

    return view('gatos',['post'=>$post]);
});

/*Route::get('buscar', function (Request $request) {
    return $request->all();
});

//buscar?query=afrodita */
