<?php

namespace App\Http\Controllers;
use App\Models\Cat;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CatController extends Controller
{

    public function index()
    {
        return view('cat.index',[
            'cats'=>Cat::latest()->first()->paginate(10)
        ]);
    }

    public function create(Cat $cat)
    {
        return view('cat.create',compact('cat'));
    }

    public function store(Request $request){

        $cat=$request->user()->cats()->create([
                'name'          =>$request->name,
                'gatos'         =>$request->gatos,
                'edad'          =>$request->edad,
                'caracteristica'=>$request->caracteristica,
        ]);

        return redirect()->route('cat.edit',$cat);
    }

    public function edit(Cat $cat)
    {
        return view('cat.edit', compact('cat'));
    }

    //Editar
    public function update(Request $request,Cat $cat){

        $cat->update([
                'name'          =>$request->name,
                'gatos'         =>$request->gatos,
                'edad'          =>$request->edad,
                'caracteristica'=>$request->caracteristica,
        ]);

        return redirect()->route('cat.edit',$cat);
    }

    public function destroy(Cat $cat)
    {

        $cat->delete();
        return back();
    }
}
