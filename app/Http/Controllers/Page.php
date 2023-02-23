<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

        class Page extends Controller
        {
                public function home(){
                        return view('home');
                }

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
            }
        }
