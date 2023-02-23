<?php

//use Illuminate\Http\Request;

use App\Http\Controllers\Page;
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

        /*//Sin agrupar la route
        Route::get('/', [Page::class,'home'])->name('home');
        Route::get('/gato', [Page::class,'gato'])->name('gato');
        Route::get('/gato/{gatos}', [Page::class,'gatos'])->name('gatos');*/

        //Agrupando routes
        Route::controller(Page::class)->group(function (){
            Route::get('/', 'home')->name('home');
            Route::get('/gato', 'gato')->name('gato');
            Route::get('/gato/{gatos}', 'gatos')->name('gatos');
        });

        // ¿Por que no se puede aplicar compact para asignar su variable?

        /*Route::get('buscar', function (Request $request) {
            return $request->all();
        });

        //buscar?query=afrodita */
