@csrf

    <label class="uppercase text-gray-700 text-xs">Nombre</label>
    <input type="text" placeholder="Nombre" name="name" class="rounded border-gray-200 w-full mb-4"  value="{{$cat->name}}">

    <label class="uppercase text-gray-700 text-xs">Gato</label>
    <input type="text" name="gatos" class="rounded border-gray-200 w-full mb-4"  value="{{$cat->gatos}}">

    <label class="uppercase text-gray-700 text-xs">Edad</label>
    <input type="text" name="edad" class="rounded border-gray-200 ml-4 w-20 mb-4"  value="{{$cat->edad}}">

    <br>
    <label class="uppercase text-gray-700 text-xs">Caracteristica</label>
    <textarea name="caracteristica" class="rounded border-gray-200 w-full mb-4" rows="5">{{$cat->caracteristica}}</textarea>

    <div class="flex justify-between items-center">
        <a href="{{ route('cat.index') }}" class="text-indigo-600">Volver</a>

        <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">
    </div>