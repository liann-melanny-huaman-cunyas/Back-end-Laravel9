@extends('template')

    @section('content')
        <h1> Gatitos traviesos</h1>

        <h3>
            <strong>
                {{ $post }}
            </strong>
        </h3>

            @if ($post === 'afrodita' || $post === 'albafica' || $post === 'mimi')
                <br>
                <strong> Edad :1 </strong>
            @elseif ($post === 'cassie')
                <strong> Edad : 2 </strong>
            @else
                <strong> no se :C </strong>
            @endif
    @endsection

