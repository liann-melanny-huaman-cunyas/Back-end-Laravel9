@extends('template')
    @section('content')
        <h1>Gatitos del mes</h1>
            @foreach ($posts as $post)
                <p>
                    <strong>{{ $post['id']}}</strong>

                    <a href="{{ route('gatos', $post['gatos']) }}">
                        {{ $post['name']}}
                    </a>
                </p>
            @endforeach
    @endsection