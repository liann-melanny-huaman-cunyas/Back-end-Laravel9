@extends('template')
@section('content')


    <div class="bg-gray-200 px-20 py-16 rounded-lg mb-8 relative overflow-hidden">
        <span class="text-xs uppercase text-green-200 bg-black rounded-full px-2 py-1">Gato Negro</span>
        <h1 class="text-3xl  text-gray-500 mt-4">Consultas</h1>
        <p class="text-sm text-gray-800 mt-2">Registro de los gatos más traviesos </p>

        <img src="{{ asset('image/CURA.png') }}" class="absolute -right-20 -bottom-20 opacity-40">
    </div>

    <div class="px-4">
        <h1 class="text-2xl mb-8 text-gray-900">
            Registro de Gatitos
        </h1>

        <div class="grid grid-cols-1 gap-4 mb-4">

            @foreach($posts as $post)

            <!-- ruta gatos . el parametro de foreach se va a gatos-->
            <a href="{{ route('gatos', $post->gatos)  }}" class="bg-gray-50 rounded-lg px-6 py-4">

                <p class="text-xs flex items-center gap-2">

                    <span class="uppercase  text-white bg-gray-600 rounded-full px-2 py-1">Consulta Nº{{ $post->id }}</span>
                    <span>{{ $post->created_at->format('d/m/Y') }}</span>
                </p>

                <h2 class="text-lg text-gray-900 mt-2">{{ $post->gatos }}</h2>
            </a>
            @endforeach
        </div>

        {{ $posts->links() }}
    </div>
@endsection


