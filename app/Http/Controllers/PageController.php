<?php

namespace App\Http\Controllers;

//AGREGAR EL MODELO

use App\Models\Cats;

//Illuminate es para clases propias de laravel
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
        {
            return view('home');
        }

    public function gato()
        {
            $posts =Cats::get();
            //$primer=Cats::first();
            //$primer=Cats::find(25);
            //dd($primer);


            return view('gato', compact('posts'));
        }

    //hacer referencia al model
    public function gatos(Cats $gatos)
        {
            return view('gatos',compact('gatos'));
        }



        //ELoquent
        /*  ModelClass::get();-> Trae todos los registros de la base de datos
            ModelClass::frist();-> Trae el primer registro de la base de datos
            ModelClass::find(id); -> Busca un registro en la base de datos por medio de su id
            ModelClass::latest(); -> Trae todos los registros de la base de datos, y los ordena de forma descendente
            ModelClass::where() */
            /*
    public function gato(){
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
    }

    public function gatos($gatos){
        $post =$gatos;
        return view('gatos',['post'=>$post]);
    } */
}
