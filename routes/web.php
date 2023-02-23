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

        /*Route::get('/', function () {
            return view('welcome');
        });*/

        Route::get('/', function () {
            return view('home');
        })->name('home');

        Route::get('/gato', function () {
            //consulta a la base de datos

            //array multidimensiona $array= [[],[]];
            $posts = [
                ['id'=>1 ,'name'=>'cassie','gatos'=>'cassie','caracteristica'=>'La mama'],
                ['id'=>2 ,'name'=>'afrodita','gatos'=>'afrodita','caracteristica'=>'el mas pequeño'],
                ['id'=>3 ,'name'=>'albafica','gatos'=>'albafica','caracteristica'=>'el mas grande'],
                ['id'=>4 ,'name'=>'mimi','gatos'=>'mimi','caracteristica'=>'la mas cariñosa'],
            ];

            //No se aplica compact debio a que es un array -> compact($posts)
            return view('gato', ["posts"=>$posts]);
        })->name('gato');

        Route::get('/gato/{gatos}', function ($gatos) {
                $post =$gatos;
                return view('gatos',['post'=>$post]);
        })->name('gatos');


        /*Route::get('buscar', function (Request $request) {
            return $request->all();
        });

        //buscar?query=afrodita */
