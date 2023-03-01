<?php

namespace App\Http\Controllers;
use App\Models\Cat;

use Illuminate\Http\Request;

class CatController extends Controller
{

    public function index()
    {
        return view('Cat.index',[
            'cats'=>Cat::latest()->first()->paginate(10)
        ]);
    }

    public function destroy(Cat $cat){

        $cat->delete();
        return back();
    }
}
