@extends('template')

    @section('content')

        <h1> Gatitos traviesos</h1>

        <h2>
            <strong>  Gato :{{ $gatos->gatos }}</strong>
            <br>
            <strong>    Id :{{ $gatos->id }}</strong>
        </h2>
        <h3>
            <strong>
                Edad del gato:  {{ $gatos ->edad }}
            </strong>
            <!-- Las variables ya se asignan sin corchetes-->
                @if ($gatos->edad <= 1)
                    <p>comida para gatitos</p>
                @else
                    <p>comida para gatotes</p>
                @endif

        </h3>

        <h4>
            Descripcion :{{  $gatos->caracteristica }}
        </h4>

    @endsection

