@csrf

    <label class="uppercase text-gray-700 text-xs">Nombre</label>
    <!-- error si hay vacios-->
    <span class="text-xs text-red-600">@error('name')  {{ $message }}    @enderror</span>
    <input  type="text" placeholder="Nombre" name="name" class="rounded border-gray-200 w-full mb-4"  
            value="{{old('name',$cat->name)}}">
            <!--Recuperar dato anterios-->

    <label  class="uppercase text-gray-700 text-xs">Gato</label>
    <span   class="text-xs text-red-600">@error('gatos')  {{ $message }}    @enderror</span>
    <input  type="text" name="gatos" class="rounded border-gray-200 w-full mb-4"  
            value="{{old('gatos',$cat->gatos)}}">

    <label  class="uppercase text-gray-700 text-xs">Edad</label>
    <span   class="text-xs text-red-600">@error('edad')  {{ $message }}    @enderror</span>
    <input  type="text" name="edad" class="rounded border-gray-200 ml-4 w-20 mb-4"  
            value="{{old('edad',$cat->edad)}}">

    <br>
    <label class="uppercase text-gray-700 text-xs">Caracteristica</label>
    <span class="text-xs text-red-600">@error('caracteristica')  {{ $message }}    @enderror</span>
    <textarea name="caracteristica" class="rounded border-gray-200 w-full mb-4" rows="5">
        {{old('caracteristica' ,$cat->caracteristica)}}
    </textarea>

    <div class="flex justify-between items-center">
        <a href="{{ route('cat.index') }}" class="text-indigo-600">Volver</a>

        <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">
    </div>