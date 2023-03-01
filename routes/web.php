<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CatController;


        Route::controller(PageController::class)->group(function (){
            Route::get('/', 'home')->name('home');
            Route::get('/gato', 'gato')->name('gato');
            Route::get('/gato/{gatos:gatos}', 'gatos')->name('gatos');
        });

        Route::get('/dashboard', function () {
            return view('dashboard');
        })->middleware(['auth', 'verified'])->name('dashboard');

        //Contiene un CRUD dentro de sus rutas
        Route::resource('cat', CatController::class)->except('show');

        Route::middleware('auth')->group(function () {
            Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        });

require __DIR__.'/auth.php';
