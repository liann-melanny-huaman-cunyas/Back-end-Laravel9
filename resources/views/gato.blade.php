

@extends('template')
    @section('content')
        <h1>Gatitos del mes</h1>
            @foreach ($posts as $post)
                <p>
                    <!--Objecto propiedad-->
                    <strong>{{ $post->id}}</strong>

                    <a href="{{ route('gatos', $post->gatos) }}">
                        {{ $post->name}}
                    </a>
                    <br />
                    <span>
                        <strong>Veterinario:</strong>
                        {{ $post ->user->name }}
                    </span>
                    <br>
                    <span>{{ $post->user->email }}</span>
                </p>
            @endforeach
                    <!--paginacion --> {{ $posts -> links() }}
    @endsection