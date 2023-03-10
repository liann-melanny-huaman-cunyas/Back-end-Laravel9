<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CatController;


        Route::controller(PageController::class)->group(function (){
            Route::get('/', 'home')->name('home');
            Route::get('/gato/{gatos:gatos}', 'gatos')->name('gatos');
        });

        Route::redirect('/dashboard', 'cat', 301)->name('dashboard');

        //Contiene un CRUD dentro de sus rutas
        Route::resource('cat', CatController::class)->middleware('auth')->except('show');

        Route::middleware('auth')->group(function () {
            Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        });

require __DIR__.'/auth.php';
